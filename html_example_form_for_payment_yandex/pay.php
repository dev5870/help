<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$price = strip_tags($_GET['price']);
$name = strip_tags($_GET['name']);
$sitename = $_SERVER['SERVER_NAME'];

?>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Redirect on Yandex...</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <div style="width:100px;margin:0 auto;">
    <img src="img/load.gif" style="width:80px;margin-top:100px;"><br><br>
  </div>
  <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
      <input type="hidden" name="receiver" value="4100115999620536">
      <input type="hidden" name="formcomment" value="Оплата курса">
      <input type="hidden" name="short-dest" value="Оплата курса">
      <input type="hidden" name="label" value="<?php echo $name; ?>">
      <input type="hidden" name="quickpay-form" value="donate">
      <input type="hidden" name="targets" value="<?php echo $name; ?>">
      <input type="hidden" name="sum" value="<?php echo $price; ?>" data-type="number">
      <input type="hidden" name="comment" value="<?php echo $name; ?>">
      <input type="hidden" name="need-fio" value="false">
      <input type="hidden" name="need-email" value="false">
      <input type="hidden" name="need-phone" value="false">
      <input type="hidden" name="need-address" value="false">
      <label style="display:none;"><input type="radio" name="paymentType" value="PC">Яндекс.Деньгами</label>
      <label style="display:none;"><input type="radio" name="paymentType" value="AC" checked>Банковской картой</label>
      <input type="hidden" name="successURL" value="//<?php echo $sitename; ?>/thanks.php">
      <div id="text" style="display:none;margin:0 auto;width:400px;color:grey;">
        Сейчас будет произведен переход на страницу оплаты.
        <br>Если автоматический переход не выполнен, вы можете <br><input type="submit" id="clickButton" value="перейти на страницу оплаты.">
      </div>
  </form>
  <script>
  window.onload = function() {
    setTimeout(function(){
      document.getElementById('text').style.display = 'block';
    }, 1000);
    setTimeout(function() {
      document.getElementById('clickButton').click();
    }, 3000);
  };
  </script>
</body>
</html>
