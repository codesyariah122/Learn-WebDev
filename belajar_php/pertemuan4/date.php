<?php  

//echo date('l, d-M-Y');

//cho time();

//echo date("l", time()+60*60*24*5);

//mktime
//membuat sendiri detik
//echo date("l", mktime(0, 0, 0, 3, 19, 1987));
echo date("l", strtotime("19 march 1987"));
echo "<br/>";
$var = "Saya";
/*
if(isset($var)):
	echo $var;
else:
	echo "Belum Ada Variable";
endif;
*/

if(!empty($var)):
	echo $var."<br/>";
else:
	echo "Tidak Ada Nilai Variable";
endif;