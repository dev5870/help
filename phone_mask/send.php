<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = 'test@mail.ru'; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

if (isset($_POST['phone']) && !empty($_POST['phone']))
{
    $phone  = strip_tags($_POST['phone']);
// Формирование заголовка письма
    $subject  = "[Заявка с сайта ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка на обратный звонок</h2>\r\n";
    $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
    $msg .= "</body></html>";
    echo "form send";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "ups, form dont send";
}