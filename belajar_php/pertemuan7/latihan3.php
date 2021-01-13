<!DOCTYPE html>
<html>
<head>
	<title>Belajar POST</title>
</head>
<body>

<?php if(isset($_POST['submit'])): ?>
<h1>Selamat Datang, <?=$_POST['nama']?></h1>
<?php endif; ?>
	<form action="" method="post">
		
		<label for="nama">Nama</label><br/>
		<input type="text" name="nama"><br/>
		<button type="submit" name="submit">Submit</button>

	</form>

</body>
</html>