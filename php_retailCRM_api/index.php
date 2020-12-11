<?php

$fio = 'test';
$phone = '234523452345';
$id2 = '102';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://demo.retailcrm.ru/api/v5/orders/create?apiKey=Ra7e4R1BkeObr1C7GAgt2dsOHQ2OOtvJ");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "site=super-sale2019-ru&order={
      \"firstName\":\"".$fio."\",
      \"phone\":\"".$phone."\",
      \"items\":[{
          \"offer\":{\"externalId\":\"".$code."\"}
          }]
      }"
);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

echo "Ответ на Ваш запрос: " . $server_output;
