<?php

ini_set('display_errors', 'On');
error_reporting('E_ALL');

function deleteCookies(){
    setcookie('lib_token', null, -1, '/');
    setcookie('lib_email', null, -1, '/');
    setcookie('lib_name', null, -1, '/');
    header("Location: /index.php");}

function checkUserReg($mail){
    $data = file_get_contents('../data/user.json');
    $jsonData = json_decode($data, true);
    unset($data);
    $result = "ok";
    for ($i = count($jsonData); $i >= 1; $i--) {
        if ($mail == $jsonData[$i]['email']) {
            return $result;}}}

function checkUserLogin($mail,$pass){
    $data = file_get_contents('../data/user.json');
    $jsonData = json_decode($data, true);
    unset($data);
    $result = "ok";
    for ($i = count($jsonData); $i >= 1; $i--) {
        if ($mail == $jsonData[$i]['email'] && $pass == $jsonData[$i]['password']) {
            return $result;}}}

function getUserId($mail){
    $data = file_get_contents('../data/user.json');
    $jsonData = json_decode($data, true);
    unset($data);
    for ($i = count($jsonData); $i >= 1; $i--) {
        if ($mail == $jsonData[$i]['email']) {
            return $i;}}}

if (isset($_GET['login']) && !empty($_GET['login']) && $_GET['login'] == 'exit') {
    deleteCookies();}

if (isset($_POST['password_confirmation']) && !empty($_POST['password_confirmation'])) {
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $password_confirmation = strip_tags($_POST['password_confirmation']);
    if (checkUserReg($email) !== "ok") {
        $data = file_get_contents('../data/user.json');
        $jsonData = json_decode($data, true);
        unset($data);
        $old = count($jsonData);
        $new = count($jsonData) + 1;
        $activationKey = md5(uniqid(rand(), 1));
        $smsCode = rand(1111, 9999);
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        $jsonData[$new] = array(
            'email' => $email,
            'password' => $password,
            'token' => $activationKey,
            'name' => $name
        );
        file_put_contents('../data/user.json', json_encode($jsonData, true));
        unset($jsonData);
        header("Location: /register/success.php");
    }
    else{
        header("Location: /register/error.php");
    }
}

if (isset($_POST['form_login']) && !empty($_POST['form_login'])) {
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    if (checkUserLogin($email,$password) == "ok") {
        $data = file_get_contents('../data/user.json');
        $jsonData = json_decode($data, true);
        unset($data);
        $id = getUserId($email);
        $lib_email = $jsonData[$id]['email'];
        $lib_name = $jsonData[$id]['name'];
        $lib_token = $jsonData[$id]['token'];
        setcookie("lib_email", $lib_email, time()+86400, "/");
        setcookie("lib_name", $lib_name, time()+86400, "/");
        setcookie("lib_token", $lib_token, time()+86400, "/");
        sleep(2);
        header("Location: /user/index.php");
    }
    else{
        header("Location: /login/error.php");
    }
}

if (isset($_POST['recovery']) && !empty($_POST['recovery'])) {
    $email = strip_tags($_POST['recovery']);
    if (checkUserReg($email) == "ok") {
        $data = file_get_contents('../data/user.json');
        $jsonData = json_decode($data, true);
        unset($data);
        $id = getUserId($email);
        $to = $jsonData[$id]['email'];
        $u_name = $jsonData[$id]['name'];
        $u_pass = $jsonData[$id]['password'];
        $sitename = $_SERVER['SERVER_NAME'];
        // Формирование заголовка письма
        $subject  = "[Remember your password]";
        $headers  = "From: mail@".$sitename." \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
        // Формирование тела письма
        $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Hello, ".$u_name."</h2>\r\n";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Your password: ".$u_pass."</h2>\r\n";
        $msg .= "</body></html>";
        // отправка сообщения
        mail($to, $subject, $msg, $headers);
        sleep(2);
        header("Location: /password/remember.php");
    }
    else{
        header("Location: /login/error.php");
    }
}