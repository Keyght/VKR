<meta charset="UTF-8">
<?php
require_once('ConnectionDBModule/ConnectDB.php');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {
    printf("Соединение не удалось: %s\n", $conn->connect_error);
    include('ErrorPage.html');
    exit();
}

if (!empty($_POST['name_add_table_client'])) {
    $name_table = $_POST['name_add_table_client'];
}
if (!empty($_POST['name_add_table_tarif_name'])) {
    $name_table = $_POST['name_add_table_tarif_name'];
}
if (!empty($_POST['name_add_table_oper'])) {
    $name_table = $_POST['name_add_table_oper'];
}
if (!empty($_POST['name_add_table_otchet'])) {
    $name_table = $_POST['name_add_table_otchet'];
}
if (!empty($_POST['name_add_table_plan'])) {
    $name_table = $_POST['name_add_table_plan'];
}
if (!empty($_POST['name_add_table_predostav_uslug'])) {
    $name_table = $_POST['name_add_table_predostav_uslug'];
}
if (!empty($_POST['name_add_table_dogovor'])) {
    $name_table = $_POST['name_add_table_dogovor'];
}
if (!empty($_POST['name_add_table_position'])) {
    $name_table = $_POST['name_add_table_position'];
}
if (!empty($_POST['name_add_table_tarif'])) {
    $name_table = $_POST['name_add_table_tarif'];
}
if (!empty($_POST['name_add_table_sotrudnik'])) {
    $name_table = $_POST['name_add_table_sotrudnik'];
}
if (!empty($_POST['name_add_table_uslug_tarif'])) {
    $name_table = $_POST['name_add_table_uslug_tarif'];
}
if (!empty($_POST['name_add_table_uslug_oper'])) {
    $name_table = $_POST['name_add_table_uslug_oper'];
}
if (!empty($_POST['name_add_table_usluga'])) {
    $name_table = $_POST['name_add_table_usluga'];
}
if (!empty($_POST['name_add_table_uchet'])) {
    $name_table = $_POST['name_add_table_uchet'];
}
if (!empty($_POST['name_add_table_user'])) {
    $name_table = $_POST['name_add_table_user'];
}

if ($name_table=='Клиент') {
    $num = $_POST['number'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $lastname = $_POST['lastName'];
    $addres = $_POST['addres'];
    $telf = $_POST['telf'];
    $sql = "INSERT INTO `Клиент`(`Номер_клиента`, `Фамилия_клиента`, `Имя_клиента`, `Отчество_клиента`, `Адрес_клиента`, `Телефон_клиента`) 
VALUES ('$num','$surname','$name','$lastname','$addres','$telf')";
}
if ($name_table=='Название_тарифа') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $sql = "INSERT INTO `Название_тарифа`(`Код_названия_тарифа`, `Наименование`) 
VALUES ('$num','$name')";
}
if ($name_table=='Оператор') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $sql = "INSERT INTO `Оператор`(`Код_оператора`, `Наименование`)
VALUES ('$num','$name')";
}
if ($name_table=='Отчёты') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $sql = "INSERT INTO `Отчёты`(`Номер_отчёта`, `Название_отчёта`, `Дата`, `Ссылка`)
VALUES ('$num',$name,$date,$link)";
}
if ($name_table=='Планы') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $sql = "INSERT INTO `Планы`(`Номер_плана`, `Название_плана`, `Дата`, `Ссылка`)
VALUES ('$num',$name,$date,$link)";
}
if ($name_table=='Предоставление_услуг') {
    $num_dog = $_POST['number_dogovor'];
    $kod_operator = $_POST['kod_operator'];
    $kod_serv = $_POST['kod_serv'];
    $num = $_POST['number'];
    $number_work = $_POST['number_work'];
    $number_klient = $_POST['number_klient'];
    $date_add = $_POST['date_add'];
    $komment = $_POST['komment'];
    $sql = "INSERT INTO `Предоставление_услуг`(`Номер_договора`, `Код_оператора`, `Код_услуг_оператора`,
`Номер_предоставления_услуг`, `Номер_сотрудника`, `Номер_клиента`, `Дата`, `Комментарий`) 
VALUES ('$num_dog','$kod_operator','$kod_serv',$num,'$number_work','$number_klient','$date_add','$komment')";
}
if ($name_table=='Договор') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $link = $_POST['link'];
    $sql = "INSERT INTO `Договор`(`Номер_договора`, `Название`, `Ссылка`)
VALUES ('$num','$name','$link')";
}
if ($name_table=='Должность') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $sql = "INSERT INTO `Должность`(`Код_должности`, `Наименование`)
VALUES ('$num','$name')";
}
if ($name_table=='Тариф') {
    $name_number = $_POST['name_number'];
    $number = $_POST['number'];
    $service_number = $_POST['service_number'];
    $sql = "INSERT INTO `Тариф`(`Код_названия_тарифа`, `Код_тарифа`, `Код_услуги_тарифа`)
VALUES ($name_number,'$number','$service_number')";
}
if ($name_table=='Сотрудник') {
    $number = $_POST['number'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $lastname = $_POST['lastName'];
    $date = $_POST['date_birth_worker'];
    $pos = $_POST['number_position'];
    $email = $_POST['email'];
    $sql = "INSERT INTO `Сотрудник`(`Номер_сотрудника`, `Фамилия_сотрудника`, `Имя_сотрудника`, `Отчество_сотрудника`, `Дата_рождения`, `Код_должности`, `email`) 
VALUES ($number,'$surname','$name','$lastname','$date','$pos','$email')";
}
if ($name_table=='Услуги_для_тарифа') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $kol = $_POST['kolvo_uslug'];
    $val = $_POST['ed_izm'];
    $sql = "INSERT INTO `Услуги_для_тарифа`(`Код_услуги_тарифа`, `Наименование`, `Количество`, `Единица_измерения`)
VALUES ($num,'$name','$kol','$val')";
}
if ($name_table=='Услуги_оператора') {
    $number_oper = $_POST['number_oper'];
    $number = $_POST['number'];
    if ($_POST['number_sevice'] != '') $number_sevice = $_POST['number_sevice'];
    else $number_sevice = 'NULL';
    if ($_POST['number_tarif'] != '') $number_tarif = $_POST['number_tarif'];
    else $number_tarif = 'NULL';
    $price = $_POST['price'];
    $cost = $_POST['cost'];
    $sql = "INSERT INTO `Услуги_оператора`(`Код_оператора`, `Код_услуг_оператора`, `Код_услуги`, `Код_названия_тарифа`, `Стоимость`, `Себестоимость`) 
VALUES ($number_oper,$number,$number_sevice,$number_tarif,'$price','$cost')";
}
if ($name_table=='Услуга') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $kol = $_POST['kolvo_uslug'];
    $val = $_POST['ed_izm'];
    $sql = "INSERT INTO `Услуга`(`Код_услуги`, `Наименование`, `Количество`, `Единица_измерения`)
VALUES ($num,'$name','$kol','$val')";
}
if ($name_table=='Учёт_рабочего_времени') {
    $number = $_POST['number'];
    $month = $_POST['month'];
    $count_work = $_POST['count_work'];
    $count_miss = $_POST['count_miss'];
    $count_sick = $_POST['count_sick'];
    $count_vacate = $_POST['count_vacate'];
    $number_worker = $_POST['number_worker'];
    $sql = "INSERT INTO `Учёт_рабочего_времени`(`Код_учёта`, `Номер_месяца`, `Количество_отработанных_часов`, `Количество_пропущенных_часов`, `Пропущено_по_болезни`, `Количество_часов_в_отпуске`, `Номер_сотрудника`)
VALUES ($number,'$month','$count_work','$count_miss','$count_sick','$count_vacate','$number_worker')";
}
if ($name_table=='users') {
    $number = $_POST['unique_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $encrypted_password = $_POST['encrypted_password'];
    $salt = $_POST['salt'];
    $created_at = $_POST['created_at'];
    $sql = "INSERT INTO `users`(`unique_id`, `name`, `email`, `encrypted_password`, `salt`, `created_at`)
VALUES ($number,'$name','$email','$encrypted_password','$salt','$created_at')";
}

if (mysqli_query($conn, $sql)) {
    echo "<p style='color: white; text-align: left'>Данные успешно добавлены</p>";
    include('Inserting.html');
} else {
    echo "Ошибка при подключении к таблице";
    echo " ".$name_table;
    include('ErrorPage.html');
    printf(mysqli_error($conn));
}

mysqli_close($conn);

?>