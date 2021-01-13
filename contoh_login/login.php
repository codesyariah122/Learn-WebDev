<?php  
session_start();
require_once 'functions.php';

if(isset($_COOKIE['id']) AND isset($_COOKIE['key'])){
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	$result = mysqli_query(connect(), "SELECT * FROM user WHERE id = $id");

	$row = mysqli_fetch_assoc($result);

	if($key === hash('sha256', $row['email'])){
		$_SESSION['login'] = true;
	}
}

if(isset($_SESSION['login'])){
	$fullname = password_hash($_SESSION['fullname'], PASSWORD_DEFAULT);
	header('Location:index.php?page='.$fullname);
}


if(isset($_REQUEST['login'])){
	$email = htmlspecialchars(strtolower(stripslashes($_REQUEST['email'])));
	$password = mysqli_real_escape_string(connect(), $_REQUEST['password']);

	if(!empty($email) AND !empty($password)){

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "
			<script>
			alert('format email tidak valid');
			</script>
		";
		}

		$result = mysqli_query(connect(), "SELECT * FROM user WHERE email = '$email'");

		if(mysqli_num_rows($result) === 1):

			$row = mysqli_fetch_assoc($result);
			
			if(password_verify($password, $row['password'])){
				$_SESSION['login'] = true;
				$_SESSION['email'] = $row['email'];
				$_SESSION['fullname'] = $row['fullname'];

				if(isset($_REQUEST['remember'])){
					setcookie('id', $row['id'], time()+120);
					setcookie('key', hash('sha256', $row['email']), time()+120);
				}

				header('Location:index.php?page='. $_SESSION['fullname']);
				exit();
			}

			header('Location:login.php?id=wrongpassword');			

		endif;

		$signup = true;


	}else{
		echo "

			<script>
			alert('form login belum diisi dengan benar');
			</script>
		";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | page</title>
	<link rel="stylesheet" href="assets/core.scss">
	<style type="text/css">
		li{
			list-style: none;
			margin-top:1rem;
		}
		fieldset{
			margin-top: 2em;
		}
		.email{
			margin-left: 2.5rem;
		}
		.password{
			margin-left: 0.5rem;
		}
		button{
			padding:5px 10px;
			font-size: 16px;
		}
		.signup{
			margin-left: 2rem;
			background-color: green;
			padding:11px 17px;
			color:#fff;
			text-decoration: none;
			border: none;
			display: inline-block;	
		}
	</style>


</head>
<body>

	<fieldset>
		<legend>Form Login</legend>

		<?php if (isset($_GET['id'])): if($_GET['id'] == "login"): ?>
			<h4>Anda telah daftar silahkan login</h4>
		<?php elseif($_GET['id'] == "wrongpassword"): ?>
			<h4>Password atau email salah</h4>
		<?php endif; endif; ?>

		<?php if (isset($_GET['page'])): if($_GET['page'] == "logout"): ?>
			<h4 class="text-info">Anda baru saja logout</h4>
		<?php endif; endif; ?>

		<?php if (isset($signup)): ?>
			<h1>Email belum terdaftar, silahkan signup</h1>
		<?php endif; ?>

		<form action="" method="post">
			
			<ul>
				<li>
					<label for="email">Email : </label>
					<input type="text" name="email" id="email" class="email" autofocus autocomplete="off">
				</li>
				<li>
					<label for="password">Password : </label>
					<input type="password" name="password" id="password" class="password">
				</li>
				<li>
					<input type="checkbox" name="remember" id="remember">
					<label for="remember">Remember Me</label>
				</li>
				<li>
					<button type="submit" name="login">Login</button>
					<a href="signup.php" class="signup">Signup</a>
				</li>
			</ul>

		</form>


	</fieldset>

</body>
</html>