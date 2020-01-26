<?php
header("Location: http://example.com/myOtherPage.php");

echo "<script>window.top.location.href = \"http://www.example.com\";</script>";

die();
?>