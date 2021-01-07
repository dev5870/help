<?php

require_once $_SERVER['DOCUMENT_ROOT'] .("/amocrm/vendor/autoload.php");

    $subdomain = ''; // это поддомен админки амосрм
    $login = '';
    $api_key = ''; // получаем API с помощью  AMOCRM.widgets.system.amohash  - вбиваем в консоль браузера в кабинете амосрм

    // получаем данные из формы
    $phone = 89991112233;
    $name = 'testName';
    $country = 'страна';

try{
    $amo = new \AmoCRM\Client($subdomain, $login, $api_key);

    // регистрируем события сделки и заполняем поля сделки
    $lead = $amo->lead;
    $lead['name'] = $name;
    $lead['phone'] = $price;
    $lead['tags'] = 'Заявка с сайта sitename';
    $lead->addCustomField(673967, $country);
    $lead->addCustomField(657895, $phone);
    $id = $lead->apiAdd(); // добавляем сделку

    // добавляем контакт
    $contact = $amo->contact;
    $contact["name"] = $name;
    $contact["phone"] = $phone;
    $contact['linked_leads_id'] = [(int)$id]; // по этому параметру связывается сделка и контакт
    $contact->addCustomField(657895, $phone, 'WORK');
    $id = $contact->apiAdd(); // добавили контакт

    // примечание
    // $note = $amo->note;
    // $note['element_id'] = $id;
    // $note['element_type'] = 1;//\AmoCRM\Models\Note::TYPE_CONTACT; // 1 - contact, 2 - lead
    // $note['note_type'] = 4; // \AmoCRM\Models\Note::COMMON @see https://developers.amocrm.ru/rest_api/notes_type.php
    // if(!empty($model_number)){
    //     $mnum = " <br /><strong>Вариант комплектации: </strong>".$model_number;
    // }else{
    //     $mnum="";
    // }
    // $note['text'] = $comment.$mnum;
    // $id = $note->apiAdd(); // добавили примечание


}catch (\AmoCRM\Exception $e) {
    printf('Error (%d): %s', $e->getCode(), $e->getMessage());
}
