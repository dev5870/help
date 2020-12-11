<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = '';
$chatId = '';
$token = '';
$sitename = $_SERVER['SERVER_NAME'];

if (isset($_POST['phone']) && !empty($_POST['phone']) && isset($_POST['name']) && !empty($_POST['name']) && !isset($_POST['text']) && empty($_POST['text']) && !isset($_POST['ques']) && empty($_POST['ques']))
{
    $name = strip_tags($_POST['name']);
    $phone = strip_tags($_POST['phone']);

    $urlFirstPart = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chatId.'&parse_mode=html&text';
    $arr = array(
        'Заявка с сайта' => $sitename,
        'Контактная информация' => '',
        'Имя' => $name,
        'Телефон' => $phone
    );
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key.":</b> " .$value."\n";
    };
    $urlSecondPart = rawurlencode($txt);
    $url = $urlFirstPart.'='.$urlSecondPart;
// отправка сообщения
    $sendToTelegram = fopen($url, "r");
    fclose($sendToTelegram);
    if ($sendToTelegram) {
// Формирование заголовка письма
        $subject  = "[Заявка с сайта ".$sitename."]";
        $headers  = "From: mail@".$sitename." \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
        $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка на обратный звонок</h2>\r\n";
        $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
        $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
        $msg .= "</body></html>";
// отправка сообщения
        mail($to, $subject, $msg, $headers);
        return true;
    } else {
        echo "Что-то пошло не так :(";
    }
}
elseif (isset($_POST['text']) && !empty($_POST['text']) && !isset($_POST['ques']) && empty($_POST['ques']))
{
    $name = strip_tags($_POST['name']);
    $text  = strip_tags($_POST['text']);

    $urlFirstPart = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chatId.'&parse_mode=html&text';
    $arr = array(
        'Заявка с сайта' => $sitename,
        'Контактная информация' => '',
        'Имя' => $name,
        'Отзыв' => $text
    );
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key.":</b> " .$value."\n";
    };
    $urlSecondPart = rawurlencode($txt);
    $url = $urlFirstPart.'='.$urlSecondPart;
// отправка сообщения
    $sendToTelegram = fopen($url, "r");
    fclose($sendToTelegram);
    if ($sendToTelegram) {
// Формирование заголовка письма
        $subject  = "[Заявка с сайта ".$sitename."]";
        $headers  = "From: mail@".$sitename." \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
        $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка на обратный звонок</h2>\r\n";
        $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
        $msg .= "<p><strong>Отзыв:</strong> ".$text."</p>\r\n";
        $msg .= "</body></html>";
// отправка сообщения
        mail($to, $subject, $msg, $headers);
        return true;
    } else {
        echo "Что-то пошло не так :(";
    }
}
elseif (!isset($_POST['text']) && empty($_POST['text']) && isset($_POST['ques']) && !empty($_POST['ques']))
{
    $ques = strip_tags($_POST['ques']);
    $phone  = strip_tags($_POST['phone']);

    $urlFirstPart = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chatId.'&parse_mode=html&text';
    $arr = array(
        'Заявка с сайта' => $sitename,
        'Контактная информация' => '',
        'Вопрос' => $ques,
        'Телефон' => $phone
    );
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key.":</b> " .$value."\n";
    };
    $urlSecondPart = rawurlencode($txt);
    $url = $urlFirstPart.'='.$urlSecondPart;
// отправка сообщения
    $sendToTelegram = fopen($url, "r");
    fclose($sendToTelegram);
    if ($sendToTelegram) {
// Формирование заголовка письма
        $subject  = "[Заявка с сайта ".$sitename."]";
        $headers  = "From: mail@".$sitename." \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
        $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка на обратный звонок</h2>\r\n";
        $msg .= "<p><strong>Вопрос:</strong> ".$ques."</p>\r\n";
        $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
        $msg .= "</body></html>";
// отправка сообщения
        mail($to, $subject, $msg, $headers);
        return true;
    } else {
        echo "Что-то пошло не так :(";
    }
}
else
{
    echo "false";
}
