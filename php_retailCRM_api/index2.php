<?php

$fio = 'test';
$phone = '234523452345';
$id2 = '102';

$utm_source  = strip_tags($_POST['utm_source']);
$utm_medium  = strip_tags($_POST['utm_medium']);
$utm_campaign  = strip_tags($_POST['utm_campaign']);
$utm_content  = strip_tags($_POST['utm_content']);
$utm_term  = strip_tags($_POST['utm_term']);

$utmstat_client_id = strip_tags($_POST['utmstat_client_id']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://1gog.retailcrm.ru/api/v5/orders/create?apiKey=weY9nzegNkNx9z9QQCOdhtIjWU8ZFdVq");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "site=tornado-ru-com&order={
        \"firstName\":\"" . $name . "\",
        \"phone\":\"" . $phone . "\",
        \"customerComment\":\"Тип заявки: ".$formType.". Ответ на вопрос 1:".$firstQuestion.". Ответ на вопрос 2:".$secondQuestion.". Ответ на вопрос 3:".$thirdQuestion."\",
        \"orderMethod\":\"gryadka\",
        \"source\":{
            \"source\":\"" . $utm_source . "\",
            \"medium\":\"" . $utm_medium . "\",
            \"campaign\":\"" . $utm_campaign . "\",
            \"keyword\":\"" . $utm_term . "\",
            \"content\":\"" . $utm_content . "\"
            },
        \"customFields\":{
            \"utmstat\":\"" . $utmstat_client_id . "\"
            },
        \"items\":[{
            \"offer\":{\"externalId\":\"Tornado1\"}
            }]
        }"
);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo "Ответ на Ваш запрос: " . $server_output;
