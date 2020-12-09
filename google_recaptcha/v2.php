<?php

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
  $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
  $secret_key = 'apiKey';
  $query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
  $data = json_decode(file_get_contents($query));
    if ($data->success) {

    }else {
      // code...
    }
  }

 ?>
