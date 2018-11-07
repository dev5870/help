<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

// ловушка для спам ботов: делаем скрытое поле в форме
if (isset($_POST["goal_html"]) && $_POST["goal_html"] !== '') {
    die("No Robots Allowed!");
}

// проверяем чтобы не было полностью пустых значений
if (!isset($_POST['phone']) && empty($_POST['phone']) && !isset($_POST['name']) && empty($_POST['name']) && !isset($_POST['message']) && empty($_POST['message'])){
    echo "Die robots! Die!";
    return;
}

$to = ''; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

$type  = strip_tags($_POST['type']);
$name  = strip_tags($_POST['name']);
$phone  = strip_tags($_POST['phone']);
$message  = strip_tags($_POST['message']);
$date = date("d.m.y");
$time = date("H:i:s");

if (isset($_POST['name']) && !empty($_POST['name']))
{
    
// Формирование заголовка письма
    $subject  = "[Заявка с сайта ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка:</h2>\r\n";
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    }
    if(isset($_POST['phone']) && !empty($_POST['phone'])){
        $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
    }
    if(isset($_POST['message']) && !empty($_POST['message'])){
        $msg .= "<p><strong>Сообщение:</strong> ".$message."</p>\r\n";
    }
    if(isset($_POST['type']) && !empty($_POST['type'])){
        $msg .= "<p><strong>Тип заявки:</strong> ".$type."</p>\r\n";
    }
    $msg .= "<p><strong>Дата заказа:</strong> ".$date."</p>\r\n";
    $msg .= "<p><strong>Время заказа:</strong> ".$time."</p>\r\n";
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "false";
}