<?php

date_default_timezone_set("Asia/Jakarta");

$day=date("l");

$arr_day=[
"Eng"=>[
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday"],
"Id"=>[
  "Minggu",
  "Senin",
  "Selasa",
  "Rabu",
  "Kamis",
  "Jumat",
  "Sabtu"
],
];

switch($day):
case($arr_day['Eng'][0]):
$hari=$arr_day['Id'][0];
break;
case($arr_day['Eng'][1]):
$hari=$arr_day['Id'][1];
break;
case($arr_day['Eng'][2]):
$hari=$arr_day['Id'][2];
break;
case($arr_day['Eng'][3]):
$hari=$arr_day['Id'][3];
break;
case($arr_day['Eng'][4]):
$hari=$arr_day['Id'][4];
break;
case($arr_day['Eng'][5]):
$hari=$arr_day['Id'][5];
break;
case($arr_day['Eng'][6]):
$hari=$arr_day['Id'][6];
break;
case($arr_day['Eng'][7]):
$hari=$arr_day['Id'][7];
break;
endswitch;