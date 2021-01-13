<?php
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
				alert('data gagal diubah');
				document.location.href='ubah.php';
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

	<h1> Update Data Mahasiswa </h1>

	<form action="" method="post">
	<input type="hidden" name="id" value="<?=$mhs['id']?>">

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
				<label for="gambar">Gambar  : </label>
				<input type="text" name="gambar" id="gambar" value="<?=$mhs['gambar']?>">
			</li>
			<li>
				<button type="submit" name="submit"> Ubah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>