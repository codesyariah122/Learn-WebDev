<?php
session_start();

if(!isset($_SESSION['login'])){
	header('Location:login.php');
}
// koneksi ke database
require_once 'functions.php';

//ambil data dari url
$id = $_GET['id'];

//query data mahasiswa berdasarkan id nya

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if(isset($_POST['submit'])):

if(ubah($_POST) > 0) {
	echo "
			<script>
				alert('data berhasil diubah');
				document.location.href='index.php';
			</script>
	";
} else {
	echo "
			<script>
				alert('tidak ada data yang diubah');
				document.location.href='index.php';
			</script>
	";
}
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data Mahasiswa</title>
	<style type="text/css">
		ul{
			list-style-type: none;
		}
	</style>
</head>
<body>

	<h1> Update Data Mahasiswa </h1>

	<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?=$mhs['id']?>">
	<input type="hidden" name="gambarLama" id="gambar" value="<?=$mhs['gambar']?>">
		<ul>
			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" value="<?=$mhs['nrp']?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?=$mhs['nama']?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="email" name="email" id="email" value="<?=$mhs['email']?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" value="<?=$mhs['jurusan']?>">
			</li>
			<li>
				<label for="gambar">Gambar  : </label><br/>
				<img src="img/<?=$mhs['gambar']?>" width="50" height="50"><br/>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit"> Ubah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>