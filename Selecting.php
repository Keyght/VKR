<?php
error_reporting(0);

if (array_keys($_POST['type'])[0]=='look_send') {
    require('ConnectDB.php');
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    if ($conn->connect_error) {
        printf("Соединение не удалось: %s\n", $conn->connect_error);
        include('ErrorPage.html');
        exit();
    }

    $name_table = $_POST['show_table'];
    echo "<p style='text-align: left;'>Выбрана таблица: ";
    echo $name_table."</p>";
    $sql = "SELECT * FROM `$name_table` WHERE 1";



    if (mysqli_query($conn, $sql)) {
        if ($name_table=='Клиент') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Номер клиента"."</th>
                                    <th>"."Фамилия"."</th>
                                    <th>"."Имя"."</th>
                                    <th>"."Отчество"."</th>
                                    <th>"."Адрес"."</th>
                                    <th>"."Телефон"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_клиента']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Фамилия_клиента'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Имя_клиента'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Отчество_клиента'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Адрес_клиента'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Телефон_клиента'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Название_тарифа') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Код названия тарифа"."</th>
                                    <th>"."Наименование"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_названия_тарифа']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Наименование'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Оператор') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Код оператора"."</th>
                                    <th>"."Наименование"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_оператора']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Наименование'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Отчёты') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Номер отчёта"."</th>
                                    <th>"."Название отчёта"."</th>
                                    <th>"."Дата"."</th>
                                    <th>"."Ссылка"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_отчёта']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Название_отчёта'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Дата'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Ссылка'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Планы') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Номер_плана"."</th>
                                    <th>"."Название_плана"."</th>
                                    <th>"."Дата"."</th>
                                    <th>"."Ссылка"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_плана']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Название_плана'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Дата'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Ссылка'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Предоставление_услуг') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Номер договора"."</th>
                                    <th>"."Код оператора "."</th>
                                    <th>"."Код услуг оператора "."</th>
                                    <th>"."Номер предоставления услуг "."</th>
                                    <th>"."Номер сотрудника "."</th>
                                    <th>"."Номер клиента "."</th>
                                    <th>"."Дата "."</th>
                                    <th>"."Комментарий "."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_договора']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_оператора'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_услуг_оператора'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_предоставления_услуг'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_сотрудника'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_клиента'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Дата'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Комментарий'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Договор') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Номер договора"."</th>
                                    <th>"."Название"."</th>
                                    <th>"."Ссылка"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_договора']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Название'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Ссылка'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Должность') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Код_должности "."</th>
                                    <th>"."Наименование"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_должности']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Наименование'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Тариф') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Код названия тарифа"."</th>
                                    <th>"."Код тарифа"."</th>
                                    <th>"."Код услуги тарифа"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_названия_тарифа']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_тарифа'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_услуги_тарифа'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Сотрудник') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Номер сотрудника"."</th>
                                    <th>"."Фамилия"."</th>
                                    <th>"."Имя"."</th>
                                    <th>"."Отчество"."</th>
                                    <th>"."Дата рождения"."</th>
                                    <th>"."Телефон"."</th>
                                    <th>"."email"."</th>
                                    <th>"."unique_id"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_сотрудника']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Фамилия_сотрудника'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Имя_сотрудника'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Отчество_сотрудника'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Дата_рождения'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_должности'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['email'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['unique_id'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Услуги_для_тарифа') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Код услуги тарифа"."</th>
                                    <th>"."Наименование"."</th>
                                    <th>"."Количество"."</th>
                                    <th>"."Единица измерения"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_услуги_тарифа']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Наименование'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Количество'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Единица_измерения'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Услуги_оператора') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Код оператора "."</th>
                                    <th>"."Код услуг оператора "."</th>
                                    <th>"."Код услуги "."</th>
                                    <th>"."Код названия_тарифа "."</th>
                                    <th>"."Стоимость"."</th>
                                    <th>"."Себестоимость"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_оператора']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_услуг_оператора'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_услуги'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_названия_тарифа'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Стоимость'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Себестоимость'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Услуга') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Код услуги"."</th>
                                    <th>"."Наименование"."</th>
                                    <th>"."Количество"."</th>
                                    <th>"."Единица измерения"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_услуги']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Наименование'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Количество'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Единица_измерения'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='Учёт_рабочего_времени') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Код учёта"."</th>
                                    <th>"."Номер месяца"."</th>
                                    <th>"."Количество отработанных часов"."</th>
                                    <th>"."Количество пропущенных часов "."</th>
                                    <th>"."Пропущено по болезни"."</th>
                                    <th>"."Количество часов в отпуске"."</th>
                                    <th>"."Номер сотрудника"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Код_учёта']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_месяца'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Количество_отработанных_часов'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Количество_пропущенных_часов'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Пропущено_по_болезни'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Количество_часов_в_отпуске'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['Номер_сотрудника'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
        if ($name_table=='users') {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table style='width: 60%;
                                    border: 1px solid #dddddd;
                                    border-collapse: collapse;'>
                                    <tbody>
                                    <tr>
                                    <th>"."Идентификатор "."</th>
                                    <th>"."Имя"."</th>
                                    <th>"."Email"."</th>
                                    <th>"."Зашифрованный пароль"."</th>
                                    <th>"."Соль"."</th>
                                    <th>"."Создан"."</th>
                                     </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<tr>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['unique_id']."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['name'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['email'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['encrypted_password'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['salt'] ."</td>
                                    <td style = 'border: 1px solid #dddddd;padding: 5px; text-align: center'>"
                        .$row['created_at'] ."</td>
                                    </tr>";
                }
                echo "</tbody></table>";
            }
        }
    } else {
        echo 'Ошибка при подключении к бд';
        include('ErrorPage.html');
        printf(mysqli_error($conn));
    }
    mysqli_close($conn);
}