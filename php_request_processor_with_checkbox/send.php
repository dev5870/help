<?php

$to = ''; //Адреса, куда будут приходить письма. две почты указываем через запятую

if (isset($_POST['phone']) && !empty($_POST['phone']) && !isset($_POST['city']) && empty($_POST['city']))
{
    $phone  = strip_tags($_POST['phone']);
    $sitename = $_SERVER['SERVER_NAME'];
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
// отправка сообщения
    echo $phone;
    mail($to, $subject, $msg, $headers);
}
elseif (isset($_POST['city']) && !empty($_POST['city']))
{
    $city  = strip_tags($_POST['city']);
    $model  = strip_tags($_POST['model']);
    $year  = strip_tags($_POST['year']);
    $kuzov  = strip_tags($_POST['kuzov']);
    $dvig  = strip_tags($_POST['dvig']);
    $name  = strip_tags($_POST['name']);
    $phone  = strip_tags($_POST['phone']);
    $email  = strip_tags($_POST['email']);
    $what = isset($_POST['what']) ? $_POST['what'] : array();
    $sitename = $_SERVER['SERVER_NAME'];
// Формирование заголовка письма
    $subject  = "[Заявка с сайта ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка.</h2>\r\n";
    $msg .= "<p><strong>Информация о покупателе:</strong></p>\r\n";
    $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
    $msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
    $msg .= "<p><strong>Информация о заказе:</strong></p>\r\n";
    foreach($what as $value) {
        $msg .= "<p><strong>Что необходимо:".$value."</strong> </p>\r\n";
    }
    $msg .= "<p><strong>Город:</strong> ".$city."</p>\r\n";
    $msg .= "<p><strong>Марка и модель автомобиля:</strong> ".$model."</p>\r\n";
    $msg .= "<p><strong>Год автомобиля:</strong> ".$year."</p>\r\n";
    $msg .= "<p><strong>Модель кузова:</strong> ".$kuzov."</p>\r\n";
    $msg .= "<p><strong>Модель двигателя:</strong> ".$dvig."</p>\r\n";
    $msg .= "</body></html>";
// отправка сообщения
    echo $phone;
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "false";
}
