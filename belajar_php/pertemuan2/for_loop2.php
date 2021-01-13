<?php

for($i=5; $i < 15; $i++):

	$spasi = str_repeat(" ", 5-$i);
	$bintang = str_repeat("*", ($i-1)*2+1);
	echo $spasi.$bintang."<br/>";
endfor;

//segitiga utuh

for($i=10;$i>=1;$i--){
	echo "<center>";
	for($d=10; $d>=$i; $d--){
		echo "*";
	}
	echo "<br/></center>";
}
