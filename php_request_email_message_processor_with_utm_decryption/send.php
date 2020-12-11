<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = ''; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

if (isset($_POST['name']) && !empty($_POST['name']))
{
    $name  = strip_tags($_POST['name']);
    $phone  = strip_tags($_POST['phone']);

    $utm_source  = strip_tags($_POST['utm_source']);
    $utm_medium  = strip_tags($_POST['utm_medium']);
    $utm_campaign  = strip_tags($_POST['utm_campaign']);
    $utm_content  = strip_tags($_POST['utm_content']);
    $utm_term  = strip_tags($_POST['utm_term']);

    $region  = strip_tags($_POST['region']);
    $region_name  = strip_tags($_POST['region_name']);
    $source  = strip_tags($_POST['source']);

    $client  = strip_tags($_POST['client']);

// Формирование заголовка письма
    $subject  = "[Заявка с сайта ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка на обратный звонок</h2>\r\n";
    $msg .= "<p><strong><u>Контактная информация</u>:</strong></p>\r\n";
    $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";


    if(isset($_POST['utm_source']) && !empty($_POST['utm_source'])){
        $msg .= "<p><strong><u>Расшифровка UTM меток:</u>:</strong></p>\r\n";
        $msg .= "<p><strong>Источник перехода:</strong> ".$utm_source."</p>\r\n";
    }
    if(isset($_POST['utm_medium']) && !empty($_POST['utm_medium'])){
        $msg .= "<p><strong>Тип трафика:</strong> ".$utm_medium."</p>\r\n";
    }
    if(isset($_POST['utm_campaign']) && !empty($_POST['utm_campaign'])){
        $msg .= "<p><strong>Название рекламной кампании:</strong> ".$utm_campaign."</p>\r\n";
    }
    if(isset($_POST['utm_content']) && !empty($_POST['utm_content'])){
        $msg .= "<p><strong>Дополнительная информация:</strong> ".$utm_content."</p>\r\n";
    }
    if(isset($_POST['utm_term']) && !empty($_POST['utm_term'])){
        $msg .= "<p><strong>Ключевая фраза:</strong> ".$utm_term."</p>\r\n";
    }

    if(isset($_POST['region']) && !empty($_POST['region'])){
        $msg .= "<p><strong>region:</strong> ".$region."</p>\r\n";
    }
    if(isset($_POST['region_name']) && !empty($_POST['region_name'])){
        $msg .= "<p><strong>region_name:</strong> ".$region_name."</p>\r\n";
    }
    if(isset($_POST['source']) && !empty($_POST['source'])){
        $msg .= "<p><strong>source:</strong> ".$source."</p>\r\n";
    }
    if(isset($_POST['client']) && !empty($_POST['client'])){
        $msg .= "<p><strong>IP клиента:</strong> ".$client."</p>\r\n";
    }


    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "false";
}
