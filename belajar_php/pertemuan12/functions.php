<?php  
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari table mahasiswa / query data
//$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
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

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);

	$rows = [];

	while($row = mysqli_fetch_assoc($result)):
		$rows[] = $row;
	endwhile;

	return $rows;

}

function tambah($data){
	global $conn;
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$gambar = htmlspecialchars($data['gambar']);
	$jurusan = htmlspecialchars($data['jurusan']);

	$query = "INSERT INTO mahasiswa VALUES (
					'',
					'$nrp',
					'$nama',
					'$email',
					'$gambar',
					'$jurusan'
		)";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	mysqli_query($conn, "ALTER TABLE mahasiswa AUTO_INCREMENT=0");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data['id'];
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$gambar = htmlspecialchars($data['gambar']);
	$jurusan = htmlspecialchars($data['jurusan']);

	$query = "UPDATE mahasiswa SET 
			nrp = '$nrp',
			nama = '$nama',
			email = '$email',
			jurusan = '$jurusan',
			gambar = '$gambar'
			WHERE id = $id
		";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function cari($keyword){
	$query = "SELECT * FROM mahasiswa 

				WHERE

				nama LIKE '%$keyword%'

			 ";

	return query($query);
}

?>