<?php

$to = 'k.shelest@omlook.com'; //Адреса, куда будут приходить письма. две почты указываем через запятую

if  (isset($_POST['Name']) && !empty($_POST['Name']))
{
    $allowed_filetypes = array('.jpg', '.png', '.jpeg'); // Здесь мы перечисляем допустимые типы файлов
    $max_filesize = 524288; // Максимальный размер загружаемого файла в байтах (в данном случае он равен 0.5 Мб).
    $upload_path = './files/'; // Место, куда будут загружаться файлы (в данном случае это папка 'files').
    $filename = $_FILES['fileforsending']['name']; // В переменную $filename заносим точное имя файла (включая расширение).
    $ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1); // В переменную $ext заносим расширение загруженного файла.
    $sitename = $_SERVER['SERVER_NAME'];
    $path = '/files/';
    if (move_uploaded_file($_FILES['fileforsending']['tmp_name'], $upload_path . $filename))
    {
        $name  = strip_tags($_POST['Name']);
        $sitename = $_SERVER['SERVER_NAME'];
// Формирование заголовка письма
        $subject  = "[Заявка с сайта ".$sitename."]";
        $headers  = "From: mail@".$sitename." \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
        $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка на расчет стоимости СОУТ</h2>\r\n";
        $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
        $msg .= "<p><strong>Загруженный документ:</strong> <a href=\"http://" . $sitename . $path . $filename . "\">Скачать</a></p>\r\n";
        $msg .= "</body></html>";
// отправка сообщения
        echo "<strong>Загруженный документ:</strong> <a href=\"http://" . $sitename . $path . $filename . "\">Скачать</a>";
        mail($to, $subject, $msg, $headers);
    }
    else
    {
        $name  = strip_tags($_POST['Name']);
        $sitename = $_SERVER['SERVER_NAME'];
// Формирование заголовка письма
        $subject  = "[Заявка с сайта ".$sitename."]";
        $headers  = "From: mail@".$sitename." \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
        $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка</h2>\r\n";
        $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
        $msg .= "</body></html>";
// отправка сообщения
        echo $email;
        mail($to, $subject, $msg, $headers);
    }
}
else
{
    die("Заполните, пожалуйста, все поля!");
}
