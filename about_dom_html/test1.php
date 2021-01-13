<?php $conn = mysqli_connect('localhost', 'root', '1', 'testing'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>testing produk</title>
	<style>
	li{
		list-style: none;
	}
	fieldset{
		margin-top: 2em;
	}
	img{

	}
	</style>
</head>
<body>
<?php 
if(isset($_POST['submit'])){
	//var_dump($_FILES); die;
	$namaFile = $_FILES['gambar']['name'];
	$sizeFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];
		if($error === 4){
			echo "<script> alert('Pilih gambar terlebih dahulu');</script>";
			return false;
		}
	$ekstensiValid = ['jpg', 'jpeg', 'png', 'gif'];
	$ekstensi = explode('.', $namaFile);
	$ekstensi = strtolower(end($ekstensi));
	if(!in_array($ekstensi, $ekstensiValid)){
		echo "<script>alert('file yang di upload bukan gambar');</script>";
		return false;
	}

	if($sizeFile > 1000000){
		echo "<script>alert('gambar yang diupload terlalu besar');</script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= ".";
	$namaFileBaru .= $ekstensi;

	move_uploaded_file($tmpName, 'image/'.$namaFileBaru);


	$gambar = $namaFileBaru;
	$name = $_POST['name'];
	$price = $_POST['price'];
	$desc = $_POST['description'];

	$query = "INSERT INTO `produk` VALUES('', '$gambar', '$name', '$price', '$desc')";
	mysqli_query($conn, $query);
	// var_dump($query); die;
	$result = mysqli_affected_rows($conn);
	//var_dump($result);die;
	if($result):
		echo "<script>
		confirm('data berhasil di insert');
		document.location.href='localhost/testing/?id=success';
		</script>";	
	else:
			echo "<script>
			confirm('data berhasil di insert');
			document.location.href='localhost/testing/?id=error';
			</script>";
	endif;

}
?>
	<h1>Form input produk</h1>
	<form action ="" method="post" enctype="multipart/form-data">
		<label for="gambar">Upload Gambar</label>
		<input type="file" name="gambar" id="gambar"><br/><br/>
		<label for="name">Nama Produk</label>
		<input type="text" name="name" id="name"><br/><br/>
		<label for="price">Price</label>
		<input type="text" name="price" id="price"><br/><br/>
		<label for="desc">Description</label>
		<textarea name="description" id="desc"></textarea><br/><br/>
		<button type="submit" name="submit">Submit</button>
	</form>

	<fieldset><legend>data produk</legend>
	<?php $query=mysqli_query($conn, "SELECT * FROM `produk` ORDER BY `id` DESC"); foreach($query as $q):?>
	<ul>
		<li>
			<?php $image = "<img src=image/".$q['image']."/>"; ?>
		<img src="image/<?=$q['image']?>" width="100" height="85"/><br/>
		<a href="whatsapp://send?text=<?=$image;?>" 
		data-action="share/whatsapp/share">
		Share via Whatsapp</a>
		</li>
		<li><?=$q['name']?></li>
		<li><?=$q['price']?></li>
		<li><?=$q['description']?></li>
	</ul>
	<?php endforeach;?>
	</fieldset>
</body>
</html>

