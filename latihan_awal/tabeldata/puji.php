<?
date_default_timezone_set("Asia/Jakarta");
$birthday="19 Mar 1987";
$harilahir_1=date("l", mktime(0,0,0, 3,19,1987));
$harilahir_2=date("l", strtotime($birthday));

switch($harilahir_1):
case("Sunday"):
$harilahir_a="Minggu";
break;
case("Monday"):
$harilahir_a="Senin";
break;
case("Tuesday"):
$harilahir_a="Selasa";
break;
case("Wednesday"):
$harilahir_a="Rabu";
break;
case("Thursday"):
$harilahir_a="Kamis";
break;
case("Friday"):
$harilahir_a="Jum'at";
break;
case("Saturday"):
$harilahir_a="Sabtu";
break;
endswitch;


switch($harilahir_2):
case("Sunday"):
$harilahir_b="Minggu";
break;
case("Monday"):
$harilahir_b="Senin";
break;
case("Tuesday"):
$harilahir_b="Selasa";
break;
case("Wednesday"):
$harilahir_b="Rabu";
break;
case("Thursday"):
$harilahir_b="Kamis";
break;
case("Friday"):
$harilahir_b="Jum'at";
break;
case("Saturday"):
$harilahir_b="Sabtu";
break;
endswitch;


echo
"Birthday : ".$birthday."<br>
Hari lahir(mktime) :  ".$harilahir_a."<br>
Hari lahir(strtotime) :  ".$harilahir_b."<br>";