<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PHP: обработчик заявок email с расшифровкой UTM меток</title>
  <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
  <form id="form" action="send.php" method="post">

    <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'];?>">
    <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'];?>">
    <input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'];?>">
    <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'];?>">
    <input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'];?>">

    <input type="hidden" name="region" value="<?php echo $_GET['region'];?>">
    <input type="hidden" name="region_name" value="<?php echo $_GET['region_name'];?>">
    <input type="hidden" name="source" value="<?php echo $_GET['source'];?>">

    <input type="hidden" name="client" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">

    <input type="tel" name="phone" value="+7(916)111-22-33"><br>
    <input type="text" name="name" value="Иванов Иван"><br>
    <input type="submit" value="отправить">
    <div class="thankyou" style="display: none">Form send</div>
  </form>
  <div id="test"></div>
  <a href="/">
    ?utm_source=источник&utm_medium=medium&utm_term=term&utm_content=content&utm_campaign=campaign&type={source_type}&source={source}&block={position_type}&position={position}&keyword={keyword}
  </a>
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
          $(".thankyou").show();
          $("#form")[0].reset();
        }
      });
    });
  </script>
</body>

</html>
