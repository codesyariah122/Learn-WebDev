<?php  
session_start();

if(!isset($_SESSION['login'])){
	header('Location:login.php');
}

require_once 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

//tombol cari ditekan
if(isset($_POST['cari'])) {
	$mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<a href="logout.php">Log Out</a>

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah Data </a><br/>
<br/>
	<form action="" method="post">
		<input type="search" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
		<button type="submit" name="cari">Cari!</button>
	</form>
<br/>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
<?php $no = 1; foreach($mahasiswa as $row):?>
		<tr>
			<td><?=$no?></td>
			<td><a href="ubah.php?id=<?=$row['id']?>">Ubah</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="hapus.php?id=<?=$row['id']?>" onclick="return confirm('yakin?');">hapus</a></td>
			<td><img src="http://localhost/belajar_php/pertemuan13/img/<?=$row['gambar']?>" width="100" height="100"/></td>
			<td><?=$row['nrp']?></td>
			<td><?=$row['nama']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['jurusan']?></td>
		</tr>
	<?php $no++; endforeach; ?>
	</table>

</body>
</html>