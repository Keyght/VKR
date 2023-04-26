<?php
require_once 'UserReg.php';
$db = new UserReg();

if (array_keys($_POST['type'])[0]=='login_butt') {

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        // get the user by email and password
        $user = $db->GetUserByEmailAndPassword($email, $password);

        if ($user != false) {
            include('Inserting.html');
        } else {
            $response["error"] = TRUE;
            $response["error_msg"] = "Пользователь с данным email не найден";
            echo json_encode($response);
        }
    } else {
        $response["error"] = TRUE;
        $response["error_msg"] = "Необходимые данные не введены";
        echo json_encode($response);
    }
}

if (array_keys($_POST['type'])[0]=='register_butt') {
    include('Registration.html');
}