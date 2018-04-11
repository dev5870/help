<?php

$sendto  = 'sales@asgrealty.ru'; //Адреса, куда будут приходить письма

$tip  = $_POST['tip'];
$name  = $_POST['name'];
$phone  = $_POST['phone'];
$comment  = $_POST['comment'];

//$source = $_POST['source'];

// Формирование заголовка письма

$subject  = '[Новая заявка - Neva Towers]';
$headers  = "From: ".$name." \r\n";
$headers .= "Reply-To: ". strip_tags($name) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка - Neva Towers</h2>\r\n";

$msg .= "<p><strong>Форма заказа:</strong> ".$tip."</p>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Сообщение:</strong> ".$comment."</p>\r\n";
//$msg .= "<p><strong>Источник:</strong> ".$source."</p>\r\n";

$msg .= "</body></html>";

// отправка сообщения

if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>
