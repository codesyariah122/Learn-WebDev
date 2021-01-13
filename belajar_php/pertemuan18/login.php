<?php  
session_start();
require_once 'functions.php';

//cek cookie 
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])):
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	//ambil username berdasarkan id

	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");

	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if($key === hash('sha256', $row['username'])){
		$_SESSION['login'] = true;
	}

endif;

if(isset($_SESSION['login'])):
	header('Location:index.php');
	exit;
endif;


if(isset($_POST['submit'])){


	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if(mysqli_num_rows($result) === 1):
		
		//cek password
		$row = mysqli_fetch_assoc($result);

		if(password_verify($password, $row['password'])):
			$_SESSION['login'] = true;

			//cek remember me
			if(isset($_POST['remember'])):

				//buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			endif;

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
			<input type="checkbox" name="remember" id="remember">
				<laber for="remember">remember me</laber>
			</li>
			<li>
				<button type="submit" name="submit">Login</button>
			</li>
		</ul>
	</form>

</body>
</html>