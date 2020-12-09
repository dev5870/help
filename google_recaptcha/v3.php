<?php

if (isset($_POST['recaptcha_response']) && !empty($_POST['recaptcha_response'])) {

	// Build POST request
	$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
	$recaptcha_secret = 'apiKey';
	$recaptcha_response = $_POST['recaptcha_response'];

	// Make and decode POST request
	$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
	$recaptcha = json_decode($recaptcha);

	// Take action based on the score returned
	if ($recaptcha->score >= 0.5) {

  }else {
    // code...
  }
}

 ?>
