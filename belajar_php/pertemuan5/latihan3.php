<?php 
$mahasiswa = [
				[
				"Puji Ermanto",
				"01114202",
				"Teknik Informatika",
				"pujiermanto@gmail.com"
				],

				[
				"Sandi Wijaya",
				"011124202",
				"Teknik Elektro",
				"sandiwijaya01@gmail.com"
				]
			];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>


	<?php foreach($mahasiswa as $mhs): ?>
	<ul>
			<li>Nama : <?= $mhs[0] ?></li>
			<li>NRP : <?= $mhs[1] ?></li>
			<li>Jurusan : <?= $mhs[2] ?></li>
			<li>Email : <?= $mhs[3] ?></li>			
	</ul>
	<?php endforeach; ?>

</body>
</html>