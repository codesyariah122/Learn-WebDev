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
	<title>latihan2</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs):?>
	<ul>
		<li>Nama : <?= $mhs['nama'] ?></li>
		<li>NRP : <?= $mhs['nrp'] ?></li>
		<li>Jurusan : <?= $mhs['jurusan'] ?></li>
		<li>Email : <?= $mhs['email'] ?></li>
	</ul>
<?php endforeach;?>

</body>
</html>