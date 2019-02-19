<?php
ini_set('display_errors','On');
error_reporting('E_ALL');
$remoteaddr = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$chatId = '';
$token = '';
if (isset($remoteaddr) && !empty($remoteaddr))
{
    $urlFirstPart = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chatId.'&parse_mode=html&text';
    $arr = array(
        'Information about user' => '',
        'REMOTE_ADDR' => $remoteaddr,
        'HTTP_USER_AGENT' => $useragent
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
        header('HTTP/1.1 404 Not Found');
    } else {
        echo "Code:2";
    }
}
else
{
    echo "Code:1";
}