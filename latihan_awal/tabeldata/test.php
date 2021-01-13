<?php
date_default_timezone_set("Asia/Jakarta");
require_once "every.php";
require_once "day.php";

echo $hari.", ".$today."<br/>";
echo "Selamat ".$salam."<br/><br/>";

echo $_ENV['REDIRECT_ANDROID_ROOT']."<br>".$_ENV['SERVER_SOFTWARE']."<br>";
?>