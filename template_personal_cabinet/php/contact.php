<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = 'golfbob3@mail.ru'; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

$email  = strip_tags($_POST['email']);
$name  = strip_tags($_POST['name']);
$subject  = strip_tags($_POST['subject']);
$message  = strip_tags($_POST['message']);

if (isset($_POST['email']) && !empty($_POST['email']))
{

// Формирование заголовка письма
    $subject  = "[Zajavka s sajta ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка:</h2>\r\n";
    if(isset($_POST['subject']) && !empty($_POST['subject'])){
        $msg .= "<p><strong>Тема:</strong> ".$subject."</p>\r\n";
    }
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    }
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $msg .= "<p><strong>email:</strong> ".$email."</p>\r\n";
    }
    if(isset($_POST['message']) && !empty($_POST['message'])){
        $msg .= "<p><strong>Сообщение:</strong> ".$message."</p>\r\n";
    }
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "false";
}