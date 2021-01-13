<?php
//require_once (dirname(__FILE__)).'/Class/classes.php';
/*$n=5;
echo "Anak ayam turun {$n}<br>";
for($a=$n;$a>=1;$a--):
$b=$a-1;
echo "Anak ayam turun {$a} , ";
if($b>=1):
echo "mati satu tinggalah {$b} <br/>";
endif;
endfor;
echo "Mati satu tinggal induknya";*/


$ls=shell_exec("ls");
$df=shell_exec("df");
$uname=shell_exec("uname");
echo "<pre>";
echo $uname;
echo "</pre>";