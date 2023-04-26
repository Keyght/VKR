<meta charset="UTF-8">
<?php
require('ConnectDB.php');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {
    printf("Соединение не удалось: %s\n", $conn->connect_error);
    include('ErrorPage.html');
    exit();
}

if (!empty($_POST['name_delete_table_client'])) {
    $name_table = $_POST['name_delete_table_client'];
}
if (!empty($_POST['name_delete_table_tarif_name'])) {
    $name_table = $_POST['name_delete_table_tarif_name'];
}
if (!empty($_POST['name_delete_table_oper'])) {
    $name_table = $_POST['name_delete_table_oper'];
}
if (!empty($_POST['name_delete_table_otchet'])) {
    $name_table = $_POST['name_delete_table_otchet'];
}
if (!empty($_POST['name_delete_table_plan'])) {
    $name_table = $_POST['name_delete_table_plan'];
}
if (!empty($_POST['name_delete_table_predostav_uslug'])) {
    $name_table = $_POST['name_delete_table_predostav_uslug'];
}
if (!empty($_POST['name_delete_table_dogovor'])) {
    $name_table = $_POST['name_delete_table_dogovor'];
}
if (!empty($_POST['name_delete_table_position'])) {
    $name_table = $_POST['name_delete_table_position'];
}
if (!empty($_POST['name_delete_table_tarif'])) {
    $name_table = $_POST['name_delete_table_tarif'];
}
if (!empty($_POST['name_delete_table_sotrudnik'])) {
    $name_table = $_POST['name_delete_table_sotrudnik'];
}
if (!empty($_POST['name_delete_table_uslug_tarif'])) {
    $name_table = $_POST['name_delete_table_uslug_tarif'];
}
if (!empty($_POST['name_delete_table_uslug_oper'])) {
    $name_table = $_POST['name_delete_table_uslug_oper'];
}
if (!empty($_POST['name_delete_table_usluga'])) {
    $name_table = $_POST['name_delete_table_usluga'];
}
if (!empty($_POST['name_delete_table_uchet'])) {
    $name_table = $_POST['name_delete_table_uchet'];
}
if (!empty($_POST['name_delete_table_user'])) {
    $name_table = $_POST['name_delete_table_user'];
}

if ($name_table=='Клиент') {
    $num = $_POST['number'];
    $sql = "DELETE FROM `Клиент` WHERE `Номер_клиента`=$num";
}
if ($name_table=='Название_тарифа') {
    $num = $_POST['number'];
    $sql = "DELETE FROM `Название_тарифа` WHERE `Код_названия_тарифа`=$num";
}
if ($name_table=='Оператор') {
    $num = $_POST['number'];
    $sql = "DELETE FROM `Оператор` WHERE `Код_оператора`=$num";
}
if ($name_table=='Отчёты') {
    $num = $_POST['number'];
    $sql = "DELETE FROM `Отчёты` WHERE `Номер_отчёта`=$num";
}
if ($name_table=='Планы') {
    $num = $_POST['number'];
    $sql = "DELETE FROM `Планы` WHERE `Номер_плана`=$num";
}
if ($name_table=='Предоставление_услуг') {
    $num_dog = $_POST['number_dogovor'];
    $kod_operator = $_POST['kod_operator'];
    $kod_serv = $_POST['kod_serv'];
    $num = $_POST['number'];
    $sql = "DELETE FROM `Предоставление_услуг` WHERE `Номер_договора`=$num_dog AND`Код_оператора`=$kod_operator AND `Код_услуг_оператора`=$kod_serv AND`Номер_предоставления_услуг`=$num";
}
if ($name_table=='Договор') {
    $num = $_POST['number'];
    $sql = "DELETE FROM `Договор` WHERE `Номер_договора`=$num";
}
if ($name_table=='Должность') {
    $num = $_POST['number'];
    $sql = "DELETE FROM `Должность` WHERE `Код_должности`=$num";
}
if ($name_table=='Тариф') {
    $name_number = $_POST['name_number'];
    $number = $_POST['number'];
    $sql = "DELETE FROM `Тариф` WHERE `Код_названия_тарифа`=$name_number AND `Код_тарифа`=$number";
}
if ($name_table=='Сотрудник') {
    $number = $_POST['number'];
    $sql = "DELETE FROM `Сотрудник` WHERE `Номер_сотрудника`=$number";
}
if ($name_table=='Услуги_для_тарифа') {
    $num = $_POST['number'];
    $sql = "DELETE FROM `Услуги_для_тарифа` WHERE `Код_услуги_тарифа`=$num";
}
if ($name_table=='Услуги_оператора') {
    $number_oper = $_POST['number_oper'];
    $number = $_POST['number'];
    $sql = "DELETE FROM `Услуги_оператора` WHERE `Код_оператора`=$number_oper AND `Код_услуг_оператора`=$number";
}
if ($name_table=='Услуга') {
    $num = $_POST['number'];
    $sql = "DELETE FROM `Услуга` WHERE `Код_услуги`=$num";
}
if ($name_table=='Учёт_рабочего_времени') {
    $number = $_POST['number'];
    $sql = "DELETE FROM `Учёт_рабочего_времени` WHERE `Код_учёта`=$number";
}
if ($name_table=='users') {
    $number = $_POST['unique_id'];
    $sql = "DELETE FROM `users` WHERE `unique_id`=$number";
}


if (mysqli_query($conn, $sql)) {
    echo "<p style='color: white; text-align: left'>Данные успешно удалены</p>";
    include('Deleting.html');
} else {
    echo "Ошибка при подключении к таблице";
    echo " ".$name_table;
    include('ErrorPage.html');
    printf(mysqli_error($conn));
}

mysqli_close($conn);