<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = ''; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

if (isset($_POST['phone']) && !empty($_POST['phone']))
{
    $phone  = strip_tags($_POST['phone']);
    $name  = strip_tags($_POST['name']);

// Формирование заголовка письма
    $subject  = "[Заявка с сайта ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка:</h2>\r\n";
    $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
    $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
elseif (isset($_GET['phone']) && !empty($_GET['phone']))
{
    $phone  = strip_tags($_GET['phone']);
    $name  = strip_tags($_GET['name']);
    $theme = strip_tags($_GET['theme']);

// Формирование заголовка письма
    $subject  = "[Заявка с сайта ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка: «".$theme."»</h2>\r\n";
    $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
    $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">

    <title>Спецпредложение от нашего интернет-магазина, товары по супер цене! Скидки до 80%.</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">



    <script type="text/javascript" src="ty-page/jquery.min.js"></script>
    <script type="text/javascript" src="ty-page/jquery.placeholder.js"></script>
    <script type="text/javascript" src="ty-page/init.js"></script>
    <script>
        var comments = JSON.parse('[]');
        var openedComments = 0;
    </script>

    <link media="all" href="ty-page/index.css" type="text/css" rel="stylesheet">
    <style>
        .man .added {
            background: #999 none repeat scroll 0 0;
            border: 0 none;
            text-shadow: none;
        }
    </style></head>
<body class="man">


<div class="section block-1">
    <div class="wrap">
        <img src="ty-page/call-girl.png" alt="">

        <div class="top-title">
            <h2>Спасибо, Ваш заказ принят!</h2>

            <div>Наш оператор свяжется с вами</div>
            <p>Старший менеджер отдела продаж.</p>
        </div>
    </div>
</div>

<div class="section block-2">
    <div class="wrap">
        <h1>эксклюзивное предложение!</h1>

        <p>Вы можете добавить этот товар с супер-скидкой к&nbsp;заказу&nbsp;прямо&nbsp;сейчас:</p>
    </div>
</div>
<!--<center style="font-weight: 500;line-height: 1.2em;margin-top: 25px;font-size: 20px;">
	Каждому покупателю зимние перчатки для сенсора iGlove в ПОДАРОК!<br>
	<img  src="111.png">
	<br>
	До конца акции осталось:
	<script src="http://megatimer.ru/s/c08d02b3c0e037a554a98b26cab9ab24.js"></script>
</center>-->
<div style="background-color: #f1f4f6; margin: auto; text-align: center; padding-top: 30px; font-size: 28px; font-family: inherit; padding-bottom: 10px;">
    <h4><span style="color: red;font-weight: 600">ВНИМАНИЕ!!!</span>&nbsp;Успей забрать подарок себе и своим близким по себестоимости!<br>Очки для вождения ночью Night Glasses за 990 руб! Действительно еще 1 день.</h4>
</div>

<div class="section block-3">
    <div class="wrap">


        <div class="tov-item tov-rate-1 clearfix"> <!--rating 4,5-->
            <span class="tov-item-sale">-50%</span>

            <div class="tov-left-cont">
                <div class="tov-gal clearfix">
                    <div class="tov-gal-big">
                        <img src="ty-page/d1.png" class="image1" alt="">
                    </div>
                    <div class="tov-gal-list">
                        <span class="active animate" data-target=".image1"><img src="ty-page/d1.png" alt=""></span>
                        <span class="animate" data-target=".image1"><img src="ty-page/d2.png" alt=""></span>
                        <span class="animate" data-target=".image1"><img src="ty-page/d3.png" alt=""></span>
                    </div>
                </div>

                <ul class="tov-adv clearfix">
                    <li class="hint hint--top  hint--info" data-hint="Гарантия возврата 14 дней"></li>
                    <li class="hint hint--top  hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
                    <li class="hint hint--top  hint--info" data-hint="Оплата товара при получении"></li>
                </ul>
            </div>
            <div class="tov-info">
                <h3>Очки для вождения ночью Night Glasses<br>с дополнительной скидкой!</h3>
                <div class="tov-info-rate"></div>
                <div class="tov-info-cost">
                    <span class="old-cost">1990      <small>р</small></span>
                    <span class="new-cost">990      <small>р</small></span>
                </div>
                <p class="tov-info-text"></p><p><b>
                        Очки для вождения ночью Night Glasses. Антибликовые очки с полностью поляризованными линзами годятся для вождения в темноте, при искусственном освещении. Отличное средство от ослепления встречным транспортом. Помимо перечисленных функций, в очках с поляризацией происходит естественное и очень быстрое расслабление мышц глаз, что делает зрение более контрастным, просветляя картинку.
                        <br /><br />
                        Благодаря тому, что антибликовые очки дают эффект солнца и увеличивают контрастность зрения, их весьма полезно использовать в темное время суток.
                        <br /><br />
                        ХАРАКТЕРИСТИКИ:<br />
                        Материал оправы: качественный сплав<br />
                        Цвет линз: желтый<br />
                        Напыление линз: поляризационное
                    </b></p>
                <p>	&nbsp;</p>

                <a class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="Очки для вождения ночью Night Glasses">Добавить к заказу</a>
            </div>
        </div>

















    </div>
</div>
<div class="section footer">
    <div class="wrap clearfix">
        <div class="left clearfix ">
            <!--<p>ООО "ОТЛИЧНЫЙ ВЫБОР"<br>
 ИНН: 7722804660 КПП: 772101001 ОГРН: 1137746276337 </p>-->
        </div>
        <div class="right"><p>Copyright (c) 2017<!--<br>ТЕЛ. 8(499) 404 15 31--> </p></div>
    </div>
</div>

<!--PopUp-->
<div class="popup reg_form reg_form_pop">
    <a class="close">Close</a>

    <h2 id="center1">Написать отзыв</h2>

    <div>
        <form id="comment-form" action="call.php" class="clearfix">
            <div>
                <input placeholder="Введите ваше имя" required="" value="" type="text">
            </div>
            <div>
                <textarea cols="" rows="8" placeholder="Введите текст отзыва" required=""></textarea>
            </div>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>



</body>
</html>

