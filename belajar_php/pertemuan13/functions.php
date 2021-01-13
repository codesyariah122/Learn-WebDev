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
	$jurusan = htmlspecialchars($data['jurusan']);

	//upload gambar 
	$gambar = upload();
	if(!$gambar) {
		return false;
	}

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

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gambar yang di upload

	if($error === 4):
		echo "<sript>
				alert('pilih gambar terlebih dahulu');
				</script>
		";

		return false;
	endif;

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar, $ekstensiGambarValid)):

		echo "<script>alert('file yang di upload bukan gambar');</script>";
		return false;
	endif;

	//cek jika ukurannya terlalu besar
	if($ukuranFile > 1000000){
		echo "<script>alert('ukuran gambar terlalu besar');</script>";
		return false;
	}

	//lolos pengecekan gambar siap di upload
	//generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

	return $namaFileBaru;

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
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambarLama = htmlspecialchars($data['gambarLama']);

	//cekapakah user pilih gambar baru atau tidak
	if($_FILES['gambar']['error'] === 4):
		$gambar = $gambarLama;
	else:
		$gambar = upload();
	endif;

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