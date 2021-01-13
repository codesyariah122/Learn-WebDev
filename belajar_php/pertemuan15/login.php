<?php  
require_once 'functions.php';

if(isset($_POST['submit'])){


	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if(mysqli_num_rows($result) === 1):
		
		//cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row['password'])):
			header('Location: index.php');
			exit;
		endif;

	endif;

	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
</head>
<body>

	<h1>Halaman Login</h1>

	<?php if(isset($error)): ?>
		<p style="color:red;">username / password salah</p>
	<?php endif; ?>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">username</label>
				<input type="username" name="username" id="username">
			</li>
			<li>
				<label for="password">password</label>
				<input type="password" name="password">
			</li>
			<li>
				<button type="submit" name="submit">Login</button>
			</li>
		</ul>
	</form>

</body>
</html>