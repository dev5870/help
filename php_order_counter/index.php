<?php
$sec = time() - strtotime('today');
$min = $sec/296;
echo ceil($min);