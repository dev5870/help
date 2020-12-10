<?php

if (mail("sackun.natalya@ya.ru", "заголовок", "текст")) {
    echo 'Отправлено';
}
else {
    echo 'Не отправлено';
}
