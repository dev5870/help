<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = ''; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

if (isset($_POST['country']) && !empty($_POST['country']))
{
    $country  = strip_tags($_POST['country']);
    $phone  = strip_tags($_POST['phone']);
    $name  = strip_tags($_POST['name']);
// Формирование заголовка письма
    $subject  = "[Заявка с сайта ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новый заказ:</h2>\r\n";
    $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
    $msg .= "<p><strong>Страна:</strong> ".$country."</p>\r\n";
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
elseif (!isset($_POST['country']) && empty($_POST['country']) && !isset($_POST['email']) && empty($_POST['email']))
{
    $type  = strip_tags($_POST['type']);
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
    $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
    $msg .= "<p><strong>Тип заявки:</strong> ".$type."</p>\r\n";
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
elseif (isset($_POST['email']) && !empty($_POST['email']) && !isset($_POST['country']) && empty($_POST['country']))
{
    $email  = strip_tags($_POST['email']);
// Формирование заголовка письма
    $subject  = "[Заявка с сайта ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Подписка на подарки:</h2>\r\n";
    $msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
else
{
    die("false");
}

?>
<!DOCTYPE html>
<html lang="RU">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Поздравляем! Ваш заказ принят!</title>
  <link type="text/css" rel="stylesheet" href="bl/css/style.css" />
  <script type="text/javascript" src="bl/js/jquery-latest.min.js"></script>
</head>

<body>
  <h1 class="title">Поздравляем!<small>Ваш заказ принят!</small></h1>
  <div class="b-form">
    <div class="frame">
      <h2 class="header">Подарки для Вас!</h2>
      <p class="text">Пожалуйста, оставьте Ваш e-mail и&nbsp;будьте в&nbsp;курсе проводимых акций и&nbsp;получайте подарки</p>

      <div class="js-mail_wrap">
        <form id="form" method="POST">
          <input type="email" name="email" placeholder="Электронная почта" required class="input js-control-email">
          <button id="button" class="button js-mail-btn">ПОЛУЧИТЬ ПОДАРОК</button>
        </form>
        <div class="mailsuccess" style="display: none">Спасибо!</div>
      </div>
    </div>
  </div>
  <div class="b-main">
    <div class="wrap">
      <div class="frame">
        <h1 class="header">Поздравляем!</h1>
        <h2 class="header">Ваш заказ принят!</h2>
        <p class="operator">В&nbsp;ближайшее время с&nbsp;вами свяжется оператор для подтверждения заказа.</p>
        <p class="plea">Просьба, держите включенным Ваш контактный телефон!</p>
        <div class="info">
          <p class="check">Пожалуйста, проверьте правильность введенной Вами информации!</p>
          <table>
            <tr>
              <td>Имя:</td>
              <td><?php echo $name; ?></td>
            </tr>
            <tr>
              <td>Телефон:</td>
              <td><?php echo $phone; ?></td>
            </tr>
          </table>
          <p class="wrong">Если Вы&nbsp;ошиблись при заполнении формы, можете <a href="/">заполнить заявку еще раз</a>.</p>
        </div>
        <p class="more">
          Для получения более подробной информации о&nbsp;заказе <a href="moreinfo.php">нажмите здесь</a>.
        </p>
      </div>
      <div class="copyright">
        <p>Осуществив заказ на&nbsp;нашем сайте какого-либо товара, Вы&nbsp;соглашаетесь получить смс-уведомление о&nbsp;доставке купленного Вами товара в&nbsp;соответствующее почтовое отделение, согласно указанному Вами индексу.</p>
        <p>
          <a href="privacypolicy.html" target="_blank">Политика конфиденциальности</a>
        </p>
      </div>
    </div>
  </div>
  <div class="b-copyright">
    <p>Осуществив заказ на&nbsp;нашем сайте какого-либо товара, Вы&nbsp;соглашаетесь получить смс-уведомление о&nbsp;доставке купленного Вами товара в&nbsp;соответствующее почтовое отделение, согласно указанному Вами индексу.</p>
    <p>
      <a href="privacypolicy.html" target="_blank">Политика конфиденциальности</a>
    </p>
  </div>
  <script>
    $('#form').submit(function(e) {
      e.preventDefault();
      var m_method = $(this).attr('method');
      var m_action = 'send.php';
      var m_data = $(this).serialize();
      $.ajax({
        type: m_method,
        cache: false,
        url: m_action,
        crossDomain: true,
        data: m_data,

        success: function(data) {
          $("#form").hide();
          $(".mailsuccess").show();
        },

        error: function(err) {
          console.log(err);
        }
      });
    });
  </script>
</body>

</html>
