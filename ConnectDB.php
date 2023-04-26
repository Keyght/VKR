<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_DATABASE = 'Поддержка предоставления услуг телефонной связи';
$connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($connect->connect_error) {
    printf("Соединение не удалось: %s\n", $connect->connect_error);
    exit();
}