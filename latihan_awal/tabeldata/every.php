<?
date_default_timezone_set("Asia/Jakarta");
$jam=date("H");
$time=date($jam.":i:s");
$today=date("d-M-Y ".$time." A " );

switch($jam):
case($jam>=00 && $jam<=10):
$salam="Pagi";
break;
case($jam>=10 && $jam<=15):
$salam="Siang";
break;
case($jam>=15 && $jam<=18):
$salam="Sore";
break;
case($jam===18):
$salam="Petang";
break;
case($jam>=18 && $jam<=23):
$salam="Malam";
break;
default;
$salam="Cedeum Bray Rek Hujan";
endswitch;

echo "Sekarang jam : $time
<br/>
selamat $salam";