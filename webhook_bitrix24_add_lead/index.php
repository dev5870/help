<?php

$utm_source  = strip_tags($_POST['utm_source']);
$utm_medium  = strip_tags($_POST['utm_medium']);
$utm_campaign  = strip_tags($_POST['utm_campaign']);
$utm_content  = strip_tags($_POST['utm_content']);
$utm_term  = strip_tags($_POST['utm_term']);

// формируем URL в переменной $queryUrl
// для получения URL необходимо в админ панели CRM создать входящий вебхук
$queryUrl = 'https://[адрес_домена].bitrix24.ru/rest/[id_пользователя]/[вебхук]/crm.lead.add.json';
// формируем параметры для создания лида в переменной $queryData
$queryData = http_build_query(array(
    'fields' => array(
        'TITLE' => "Название лида",
        "NAME" => "Петр Петров",
        "UF_CRM_1559311836527" => "Пользовательское поле 1",
        "UF_CRM_1569488320534" => "Пользовательское поле 2",
        'PHONE' => Array(
            "n0" => Array(
                "VALUE" => "79991111111",
                "VALUE_TYPE" => "WORK",
            ),
        ),
        "UTM_CAMPAIGN" => $utm_campaign,"",$utm_campaign,
        "UTM_CONTENT" => $utm_content,"",$utm_content,
        "UTM_MEDIUM" => $utm_medium,"",$utm_medium,
        "UTM_SOURCE" => $utm_source,"",$utm_source,
        "UTM_TERM" => $utm_term,"",$utm_term
    ),
    'params' => array("REGISTER_SONET_EVENT" => "Y")
));
// обращаемся к Битрикс24 при помощи функции curl_exec
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $queryUrl,
    CURLOPT_POSTFIELDS => $queryData,
));
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result, 1);
if (array_key_exists('error', $result)) echo "Ошибка при сохранении лида: ".$result['error_description']."<br/>";

