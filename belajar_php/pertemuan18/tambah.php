<?php
session_start();

if(!isset($_SESSION['login'])){
	header('Location:login.php');
}
// koneksi ke database
require_once 'functions.php';

if(isset($_POST['submit'])):
 
	if(tambah($_POST) > 0) {
	echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href='index.php';
			</script>
	";
} else {
	echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href='tambah.php';
			</script>
	";
}
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<style type="text/css">
		ul{
			list-style-type: none;
		}
	</style>
</head>
<body>

	<h1> Tambah Data Mahasiswa </h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="email" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">Gambar  : </label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit"> Tambah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>