<?php 
if(!isset($_GET['nrp']) || !isset($_GET['nama']) || !isset($_GET['jurusan']) || !isset($_GET['email'])): 
	header('Location: latihan1.php');
	exit;
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar GET</title>
</head>
<body>

	<ul>
		<li><?=$_GET['nrp']?></li>
		<li><?=$_GET['nama']?></li>
		<li><?=$_GET['jurusan']?></li>
		<li><?=$_GET['email']?></li>
	</ul>

</body>
</html>