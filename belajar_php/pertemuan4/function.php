<?php  
function sapa($time, $nama="admin")
{
	$time = date('G');

	switch($time):
		case($time < 24):
		$ucapan = "Selamat Pagi";
		break;
		case($stime > 10):
		$ucapan = "Selamat Siang";
		break;
		case($time > 14):
		$ucapan = "Selamat Sore";
		break;
		case($time > 18):
		$ucapan = "Selamat Malam";
		break;
		default;
	endswitch;

	return "$ucapan, $nama <br/>";
}

echo sapa("Puji Ermanto");
?>