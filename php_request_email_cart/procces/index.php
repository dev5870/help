<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = ''; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

$email  = strip_tags($_POST['Email']);
$dostavka  = strip_tags($_POST['Доставка']);
$addr  = strip_tags($_POST['Адрес доставки']);
$vopros  = strip_tags($_POST['Textarea']);
$name  = strip_tags($_POST['Name']);
$phone  = strip_tags($_POST['phone']);
$Phone  = strip_tags($_POST['Phone']);
$Textarea  = strip_tags($_POST['Textarea']);
$order  = strip_tags($_POST['tildapayment']);
$json = json_decode($order, true);

if (isset($_POST['Email']) && !empty($_POST['Email']) || isset($_POST['Phone']) && !empty($_POST['Phone']) || isset($_POST['phone']) && !empty($_POST['phone']))
{

// Формирование заголовка письма
    $subject  = "[Zajavka s sajta ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка:</h2>\r\n";
    if(isset($_POST['Name']) && !empty($_POST['Name'])){
        $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    }
    if(isset($_POST['phone']) && !empty($_POST['phone'])){
        $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
    }
    if(isset($_POST['Phone']) && !empty($_POST['Phone'])){
        $msg .= "<p><strong>Телефон:</strong> ".$Phone."</p>\r\n";
    }
    if(isset($_POST['Email']) && !empty($_POST['Email'])){
        $msg .= "<p><strong>email:</strong> ".$email."</p>\r\n";
    }
    if(isset($_POST['Доставка']) && !empty($_POST['Доставка'])){
        $msg .= "<p><strong>Способ доставки:</strong> ".$dostavka."</p>\r\n";
    }
    if(isset($_POST['Адрес доставки']) && !empty($_POST['Адрес доставки'])){
        $msg .= "<p><strong>Адрес доставки:</strong> ".$addr."</p>\r\n";
    }
    if(isset($_POST['Textarea']) && !empty($_POST['Textarea'])){
        $msg .= "<p><strong>Вопрос/адрес доставки:</strong> ".$vopros."</p>\r\n";
    }
    if(isset($_POST['tildapayment']) && !empty($_POST['tildapayment'])){
        $msg .= "<p><strong>Информация о заказе:</strong><br></p>\r\n";
        $msg .= "Сумма заказа:".$json['amount']."; <br>\r\n";
        $count = count($json['products']);
        for($i = 0; $i < $count; $i++){
          $msg .= "Наименование товара: ".$json['products'][$i]['name']." / модель: ".$json['products'][$i]['options'][0]['variant']." (количество: ".$json['products'][$i]['quantity']."шт.)<br>\r\n";
        }
    }
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
    echo "1";
    json_encode($json,true);
}
else
{
    echo "false";
}
