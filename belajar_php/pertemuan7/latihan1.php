<?php  
$mahasiswa = [
				[
				 "nama"=>"Puji Ermanto", 
				 "nrp"=>"011142020", 
				 "jurusan"=>"Teknik Informatika", 
				 "email"=>"pujiermanto@gmail.com"
				],
				[
				 "nama"=>"Dody Mulyadi", 
				 "nrp"=>"011152020", 
				 "jurusan"=>"Teknik Informatika", 
				 "email"=>"dodymulyadi@gmail.com"
				],
			 ];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Get</title>
</head>
<body>
<?php foreach($mahasiswa as $mhs):?>
<ul>
	<li><a href="latihan2.php?nrp=<?=$mhs['nrp']?>&nama=<?=$mhs['nama']?>&jurusan=<?=$mhs['jurusan']?>&email=<?=$mhs['email']?>"><?=$mhs['nama']?></a></li>
</ul>
<?php endforeach; ?>
</body>
</html>