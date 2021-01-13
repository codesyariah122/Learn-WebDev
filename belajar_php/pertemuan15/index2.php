
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari table mahasiswa / query data
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// if( !$result ):
// 	echo mysqli_error($conn);
// endif;

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() //mengembalikan array numeric
//mysqli_fetch_assoc() //mengembalikan array associative
//mysqli_fetch_array() //mengembalikan keduanya
//mysqli_fetcy_object()

//$mahasiswa = mysqli_fetch_array($result);
//var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

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
<?php $no = 1; while($row = mysqli_fetch_assoc($result)):?>
		<tr>
			<td><?=$no?></td>
			<td><a href="ubah.php">Ubah</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="hapus.php">hapus</a></td>
			<td><img src="http://localhost/belajar_php/pertemuan9/img/<?=$row['gambar']?>" width="100" height="100"/></td>
			<td><?=$row['nrp']?></td>
			<td><?=$row['nama']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['jurusan']?></td>
		</tr>
	<?php $no++; endwhile; ?>
	</table>

</body>
</html>