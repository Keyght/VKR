<?php
error_reporting(0);

if (array_keys($_POST['type'])[0]=='filtr_button') {
    require_once('ConnectionDBModule/ConnectDB.php');
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    if ($conn->connect_error) {
        printf("Соединение не удалось: %s\n", $conn->connect_error);
        include('ErrorPage.html');
        exit();
    }

    if (!empty($_POST['number_usl'])) {$number_usl = '`Номер_предоставления_услуг`  = '.$_POST['number_usl'];} else {
        $number_usl = '1';
    }
    if (!empty($_POST['rabotnik'])) {$rabotnik = "`Фамилия_сотрудника`  LIKE '%".$_POST['rabotnik']."%'";} else {
        $rabotnik = '1';
    }
    if (!empty($_POST['klient'])) {$klient = "`Фамилия_клиента`  LIKE '%".$_POST['klient']."%'";} else {
        $klient = '1';
    }


    if (!empty($_POST['Tarifiche'])){$Tarifiche = "OR `Наименование` LIKE '%Тарифище%'";} else {
        $Tarifiche = '';
    }
    if (!empty($_POST['City'])) {$City = "OR `Наименование` LIKE '%Городской%'";} else {
        $City = '';
    }
    if (!empty($_POST['Derevhya'])) {$Derevhya = "OR `Наименование` LIKE '%Деревенский%'";} else {
        $Derevhya = '';
    }
    if (!empty($_POST['SvG'])){$SvG = "OR `Наименование` LIKE '%Связь G%'"; } else {
        $SvG = '';
    }
    if (empty($Tarifiche)&&empty($City)&&empty($Derevhya)&&empty($SvG)) {
        $Tarifiche="OR 1";
    }


    if (!empty($_POST['Internet'])) {$Internet = "OR u LIKE '%интернет%'";} else {
        $Internet = '';
    }
    if (!empty($_POST['SMS'])) {$SMS = "OR u LIKE '%СМС%'";} else {
        $SMS = '';
    }
    if (!empty($_POST['Calls'])) {$Calls = "OR u LIKE '%Звонки%'";} else {
        $Calls = '';
    }

    if (empty($Internet)&&empty($SMS)&&empty($Calls)) {
        $Internet="OR 1";
    }


    if (!empty($_POST['Tele2'])) {$Tele2 = "OR CONCAT(COALESCE(oper1,''), COALESCE(oper2,'')) LIKE '%Теле2%'";} else {
        $Tele2 = '';
    }
    if (!empty($_POST['MTC'])) {$MTC = "OR CONCAT(COALESCE(oper1,''), COALESCE(oper2,'')) LIKE '%МТС%'";} else {
        $MTC = '';
    }
    if (!empty($_POST['Tis-dialog'])) {$Tis = "OR CONCAT(COALESCE(oper1,''), COALESCE(oper2,'')) LIKE '%Тис-диалог%'";} else {
        $Tis = '';
    }

    if (empty($Tele2 )&&empty($MTC)&&empty($Tis)) {
        $Tele2 ="OR 1";
    }



    $sql = "
SELECT 
	`Номер_договора`,
	`Предоставление_услуг`.`Код_оператора`,
    `Предоставление_услуг`.`Код_услуг_оператора`,
	`Номер_предоставления_услуг`, 
	`Дата`, 
	`Фамилия_сотрудника`, 
	`Фамилия_клиента`, 
	CONCAT(COALESCE(oper1,''), COALESCE(oper2,'')) as 'Оператор' ,
	`Наименование` as 'Тариф',
	u as 'Услуга'
FROM 
	((((`Предоставление_услуг`
			INNER JOIN `Сотрудник` ON `предоставление_услуг`.`Номер_сотрудника` = `Сотрудник`.`Номер_сотрудника`) 
			INNER JOIN `Клиент` ON `предоставление_услуг`.`Номер_клиента` = `Клиент`.`Номер_клиента`) 
			LEFT JOIN (SELECT `Услуги_оператора`.`Код_оператора`, `Услуги_оператора`.`Код_услуг_оператора`, `Оператор`.`Наименование` as oper1, `Название_тарифа`.`Наименование`  
			           FROM `Услуги_оператора` 
				INNER JOIN `Название_тарифа` ON `Услуги_оператора`.`Код_названия_тарифа` = `Название_тарифа`.`Код_названия_тарифа`
                INNER JOIN `Оператор` ON `Услуги_оператора`.`Код_оператора` = `Оператор`.`Код_оператора`) as s1 
	                ON `Предоставление_услуг`.`Код_оператора` = s1.`Код_оператора` AND `Предоставление_услуг`.`Код_услуг_оператора` = s1.`Код_услуг_оператора`)
            LEFT JOIN (SELECT `Услуги_оператора`.`Код_оператора`, `Услуги_оператора`.`Код_услуг_оператора`, `Оператор`.`Наименование` as oper2, `Услуга`.`Наименование`  as u FROM `Услуги_оператора`
                INNER JOIN `Услуга` ON `Услуги_оператора`.`Код_услуги` = `Услуга`.`Код_услуги`
                INNER JOIN `Оператор` ON `Услуги_оператора`.`Код_оператора` = `Оператор`.`Код_оператора`) as s2 ON `Предоставление_услуг`.`Код_оператора` = s2.`Код_оператора` AND `Предоставление_услуг`.`Код_услуг_оператора` = s2.`Код_услуг_оператора`)
                WHERE $number_usl AND $rabotnik AND $klient AND ('1' LIKE '0' $Tarifiche"."  $City "."$Derevhya "." $SvG) AND ('1' LIKE '0' $Internet"."  $SMS"."  $Calls) AND ('1' LIKE '0' $Tele2"."  $MTC"."  $Tis)
ORDER BY `Номер_договора`, `Предоставление_услуг`.`Код_оператора`, `Предоставление_услуг`.`Код_услуг_оператора`, `Номер_предоставления_услуг`
";

    if (mysqli_query($conn, $sql)) {

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table style='width: 60%;
                        border: 1px solid #dddddd;
                        border-collapse: collapse; 
						float: right;
						position: absolute; 
						margin-left: 300px;
						margin-top: -785px;'>
                        <tbody><tr>
                   <th>"
                . "Номер договора"
                . "</th><th>" . "Код оператора"
                . "</th><th>" . "Код услуг оператора"
                . "</th><th>" . "Номер предоставления услуг"
                . "</th><th>" . "Дата"
                . "</th><th>" . "Фамилия сотрудника"
                . "</th><th>" . "Фамилия_клиента"
                . "</th><th>" . "Оператор"
                . "</th><th>" . "Тариф"
                . "</th><th>" . "Услуга"
                . "</th>
                 </tr>";
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo
                    "<tr><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Номер_договора']
                    . "</td><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Код_оператора']
                    . "</td><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Код_услуг_оператора']
                    . "</td><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Номер_предоставления_услуг']
                    . "</td><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Дата']
                    . "</td><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Фамилия_сотрудника']
                    . "</td><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Фамилия_клиента']
                    . "</td><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Оператор']
                    . "</td><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Тариф']
                    . "</td><td style = 'border: 1px solid #dddddd;
                        padding: 5px; text-align: center'>" . $row['Услуга']
                    . "</td></tr>";
            }
            echo "</tbody></table>";
        }
    } else {
        echo "Ошибка при подключении к бд";
        include('ErrorPage.html');
        printf(mysqli_error($conn));
    }

    mysqli_close($conn);
}