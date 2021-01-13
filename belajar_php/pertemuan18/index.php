<?php  
session_start();

if(!isset($_SESSION['login'])){
	header('Location:login.php');
}

require_once 'functions.php';

//pagination
//konfigurasi
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman =  ceil($jumlahData / $jumlahDataPerhalaman);

//cek halaman aktif
$halamanAktif = (isset($_GET['p'])) ? $_GET['p'] : 1;

$awalData = ($jumlahDataPerhalaman * $halamanAktif)- $jumlahDataPerhalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");

//tombol cari ditekan
if(isset($_POST['cari'])) {
	if(cari($_POST['keyword'])):
		$mahasiswa = cari($_POST['keyword']);
		//var_dump($mahasiswa);
	else:
		$error = true;
	endif;
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
<?php if($halamanAktif > 1): ?>
<a href="?p=<?=$halamanAktif-1?>">&laquo;</a>
<?php endif; ?>

<!-- navigasi -->
<?php for($i=1; $i<=$jumlahHalaman; $i++): ?>
	<?php if($i == $halamanAktif): ?>
	<a href="?p=<?=$i?>" style="font-weight:bold; color:red;"><?=$i?></a>
	<?php else: ?>
		<a href="?p=<?=$i?>"><?=$i?></a>
	<?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman): ?>
<a href="?p=<?=$halamanAktif+1?>">&raquo;</a>
<?php endif; ?>

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

<?php if(isset($error)): ?>
	<tr align="right">
				<td colspan="5" style="table-layout:fixed;border-collapse: collapse; border:1px; color:firebrick;display:table-cell;">Data yang dicari tidak ditemukan</td>
	</tr>
<?php else: ?>
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
	<?php $no++; endforeach;endif; ?>
	</table>

</body>
</html>