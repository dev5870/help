<?phpif (isset($_GET['utm_source']) && $_GET['utm_source'] == 'yandex'){    $phone = 'direct-phone';}else{    $phone = 'simple-phone';}?><html><head>    <meta charset="utf-8" />    <title>Виджет подмены контактного номера телефона</title></head><body><h2><?php echo $phone; ?></h2></body></html>