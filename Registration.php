<?php

require_once 'UserReg.php';
$db = new UserReg();

if (array_keys($_POST['type'])[0]=='register_butt') {
    $response = array("error" => FALSE);

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($db->IsUserExisted($email)) {
            $response["error"] = TRUE;
            $response["error_msg"] = "Пользователь с данным email " . $email . " уже существует";
            echo json_encode($response);
        } else {
            $user = $db->InsertUser($name, $email, $password);
            if ($user) {
                include('Inserting.html');
            } else {
                $response["error"] = TRUE;
                $response["error_msg"] = "При регистрации возникла ошибка";
                echo json_encode($response);
            }
        }
    } else {
        $response["error"] = TRUE;
        $response["error_msg"] = "Необходимые параметры не введены";
        echo json_encode($response);
    }
}
if (array_keys($_POST['type'])[0]=='login_butt') {
    include('Login.html');
}