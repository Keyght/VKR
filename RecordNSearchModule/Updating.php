<meta charset="UTF-8">
<?php
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
require_once('ConnectionDBModule/ConnectDB.php');
if ($conn->connect_error) {
    printf("Соединение не удалось: %s\n", $conn->connect_error);
    include('ErrorPage.html');
    exit();
}

if (!empty($_POST['name_update_table_client'])) {
    $name_table = $_POST['name_update_table_client'];
}
if (!empty($_POST['name_update_table_tarif_name'])) {
    $name_table = $_POST['name_update_table_tarif_name'];
}
if (!empty($_POST['name_update_table_oper'])) {
    $name_table = $_POST['name_update_table_oper'];
}
if (!empty($_POST['name_update_table_otchet'])) {
    $name_table = $_POST['name_update_table_otchet'];
}
if (!empty($_POST['name_update_table_plan'])) {
    $name_table = $_POST['name_update_table_plan'];
}
if (!empty($_POST['name_update_table_predostav_uslug'])) {
    $name_table = $_POST['name_update_table_predostav_uslug'];
}
if (!empty($_POST['name_update_table_dogovor'])) {
    $name_table = $_POST['name_update_table_dogovor'];
}
if (!empty($_POST['name_update_table_position'])) {
    $name_table = $_POST['name_update_table_position'];
}
if (!empty($_POST['name_update_table_tarif'])) {
    $name_table = $_POST['name_update_table_tarif'];
}
if (!empty($_POST['name_update_table_sotrudnik'])) {
    $name_table = $_POST['name_update_table_sotrudnik'];
}
if (!empty($_POST['name_update_table_uslug_tarif'])) {
    $name_table = $_POST['name_update_table_uslug_tarif'];
}
if (!empty($_POST['name_update_table_uslug_oper'])) {
    $name_table = $_POST['name_update_table_uslug_oper'];
}
if (!empty($_POST['name_update_table_usluga'])) {
    $name_table = $_POST['name_update_table_usluga'];
}
if (!empty($_POST['name_update_table_uchet'])) {
    $name_table = $_POST['name_update_table_uchet'];
}
if (!empty($_POST['name_update_table_user'])) {
    $name_table = $_POST['name_update_table_user'];
}


if ($name_table=='Клиент') {
    $num = $_POST['number'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $lastname = $_POST['lastName'];
    $addres = $_POST['addres'];
    $telf = $_POST['telf'];
    $sql = "UPDATE `Клиент` SET `Фамилия_клиента`='$surname', `Имя_клиента`='$name', `Отчество_клиента`='$lastname', `Адрес_клиента`='$addres', `Телефон_клиента`='$telf' 
WHERE `Номер_клиента`=$num";
}
if ($name_table=='Название_тарифа') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $sql = "UPDATE `Название_тарифа` SET `Наименование`='$name' 
WHERE `Код_названия_тарифа`=$num";
}
if ($name_table=='Оператор') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $sql = "UPDATE `Оператор` SET `Наименование`='$name'
WHERE `Код_оператора`=$num";
}
if ($name_table=='Отчёты') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $sql = "UPDATE `Отчёты` SET `Название_отчёта`='$name', `Дата`='$date', `Ссылка`='$link'
WHERE `Номер_отчёта`=$num";
}
if ($name_table=='Планы') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $sql = "UPDATE `Планы` SET `Название_плана`='$name', `Дата`='$date', `Ссылка`='$link'
WHERE `Номер_плана`=$num";
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
    $sql = "UPDATE `Предоставление_услуг` SET `Номер_сотрудника`='$number_work', `Номер_клиента`='$number_klient', `Дата`='$date', `Комментарий`='$komment' 
WHERE `Номер_договора`=$num_dog AND `Код_оператора`=$kod_operator AND `Код_услуг_оператора`=$kod_serv AND`Номер_предоставления_услуг`=$num";
}
if ($name_table=='Договор') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $link = $_POST['link'];
    $sql = "UPDATE `Договор` SET `Название`='$name', `Ссылка`='$link'
WHERE `Номер_договора`=$num";
}
if ($name_table=='Должность') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $sql = "UPDATE `Должность` SET `Наименование`='$name'
WHERE `Код_должности`=$num";
}
if ($name_table=='Тариф') {
    $name_number = $_POST['name_number'];
    $number = $_POST['number'];
    $service_number = $_POST['service_number'];
    $sql = "UPDATE `Тариф` SET `Код_услуги_тарифа`='$service_number'
WHERE `Код_названия_тарифа`=$name_number AND `Код_тарифа`=$number";
}
if ($name_table=='Сотрудник') {
    $number = $_POST['number'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $lastname = $_POST['lastName'];
    $date = $_POST['date_birth_worker'];
    $pos = $_POST['number_position'];
    $email = $_POST['email'];
    $sql = "UPDATE `Сотрудник` SET `Фамилия_сотрудника`='$surname', `Имя_сотрудника`='$name', `Отчество_сотрудника`='$lastname', `Дата_рождения`='$date', `Код_должности`='$pos', `email`='$email' 
WHERE `Номер_сотрудника`=$number";
}
if ($name_table=='Услуги_для_тарифа') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $kol = $_POST['kolvo_uslug'];
    $val = $_POST['ed_izm'];
    $sql = "UPDATE `Услуги_для_тарифа` SET `Наименование`='$name', `Количество`='$kol', `Единица_измерения`='$val'
WHERE `Код_услуги_тарифа`=$num";
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
    $sql = "UPDATE `Услуги_оператора` SET `Код_услуги`=$number_sevice, `Код_названия_тарифа`=$number_tarif, `Стоимость`='$price', `Себестоимость`='$cost' 
WHERE `Код_оператора`=$number_oper AND `Код_услуг_оператора`=$number";
}
if ($name_table=='Услуга') {
    $num = $_POST['number'];
    $name = $_POST['name'];
    $kol = $_POST['kolvo_uslug'];
    $val = $_POST['ed_izm'];
    $sql = "UPDATE `Услуга` SET `Наименование`='$name', `Количество`='$kol', `Единица_измерения`='$val'
WHERE `Код_услуги`=$num";
}
if ($name_table=='Учёт_рабочего_времени') {
    $number = $_POST['number'];
    $month = $_POST['month'];
    $count_work = $_POST['count_work'];
    $count_miss = $_POST['count_miss'];
    $count_sick = $_POST['count_sick'];
    $count_vacate = $_POST['count_vacate'];
    $number_worker = $_POST['number_worker'];
    $sql = "UPDATE `Учёт_рабочего_времени` SET `Номер_месяца`='$month', `Количество_отработанных_часов`='$count_work', 
`Количество_пропущенных_часов`='$count_miss', `Пропущено_по_болезни`='$count_sick', `Количество_часов_в_отпуске`='$count_vacate', `Номер_сотрудника`='$number_worker'
WHERE `Код_учёта`=$number";
}
if ($name_table=='users') {
    $number = $_POST['unique_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $encrypted_password = $_POST['encrypted_password'];
    $salt = $_POST['salt'];
    $created_at = $_POST['created_at'];
    $sql = "UPDATE `users` SET `name`='$name', `email`='$email', `encrypted_password`='$encrypted_password', `salt`='$salt', `created_at`='$created_at'
WHERE `unique_id`=$number";
}


if (mysqli_query($conn, $sql)) {
    echo "<p style='color: white; text-align: left'>Данные успешно обновлены</p>";
    include('Updating.html');
} else {
    echo "Ошибка при подключении к бд";
    include('ErrorPage.html');
    printf(mysqli_error($conn));
}

mysqli_close($conn);

?>