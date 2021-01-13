<?php  
require_once 'functions.php';

if(isset($_POST['submit'])){
	if(registrasi($_POST) > 0):
		echo "<script>alert('registrasi berhasil');</script>";
	else:
		echo mysqli_error($conn);
	endif;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
</head>
<body>

<h1>Halaman Registrasi</h1>

<form action="" method="post">
	<ul>
		<li>
			<label for="username">username : </label>
			<input type="text" name="username" id="username">
		</li>

		<li>
			<label for="password">password : </label>
			<input type="password" name="password" id="password">
		</li>

		<li>
			<label for="password2">password konfirmasi : </label>
			<input type="password" name="password2" id="password2">
		</li>

		<li>
			<button type="submit" name="submit">Registrasi</button>
		</li>
	</ul>
</form>

</body>
</html>