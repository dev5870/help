<?php
if(preg_match('/Mobile/', $_SERVER['HTTP_USER_AGENT'])){
    header("Location: /phone/index.html");
}
?>