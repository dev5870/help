## 4_terminal_windows_at_startup

Скрипт для запуска 4 окно терминала в Ubuntu. Можно добавить в автозагрузку чтобы скрипт срабатывал при старте ОС.
Скрипт необходимо адаптировать под разрешение вашего экрана.
Видео с объяснением:
`https://youtu.be/nB-Ct-CsDgo`

![Image alt](https://github.com/kostyashelest/bash/raw/master/img/ubuntu_4_screen.png)

---

## allure

Скрипт для генерации, копирования и запуска отчетов Allure-Codeception.
Скрипт запускается командой allure (необходимо предварительно добавить в окружение).
Запускать из директории в которой создаются allure-reports (/tmp/).

---

## yii2-auto-completion.sh

Скрипт для вывода списка команд yii2, а также автоподстановка TAB.

![Image alt](https://github.com/kostyashelest/bash/raw/master/img/yii2_auto_completion.png)

---

## site_status_code

Простой скрипт для проверки статуса ответа сайта. Запускается через cron. Скрипт отправляет сообщение в телеграм и выводит уведомление на экран, в случае ошибки.

![Image alt](https://github.com/kostyashelest/bash/raw/master/img/site_status_code.png)

---

## backup_mysql_db

Скрипт для выполнения бэкапов базы данных mysql.  
Запускается через cron (пример запуска каждый день в 9 утра):  
`0 9 * * * /home/user/bin/backup.sh >> /home/user/www/domain.com/cron_log.md`

В случае возникновения ошибки MySQL (нехватка прав пользователя для выполнения mysqldump) выполнить:  
`GRANT PROCESS ON *.* TO 'user_name'@'localhost';`