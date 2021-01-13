<?php
require '../functions.php';

$keyword = $_GET['keyword'];

$query="SELECT * FROM mahasiswa WHERE
				nama LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'
			 ";

$mahasiswa = query($query);

?>

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
			<td><img src="http://localhost/belajar_php/pertemuan19/img/<?=$row['gambar']?>" width="100" height="100"/></td>
			<td><?=$row['nrp']?></td>
			<td><?=$row['nama']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['jurusan']?></td>
		</tr>
	<?php $no++; endforeach; ?>
	</table>