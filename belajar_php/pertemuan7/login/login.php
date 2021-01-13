<?php  
if(isset($_REQUEST['login'])):
	if($_REQUEST['username'] == 'admin' && $_REQUEST['password'] == '123'):
		
		header('location: admin.php');
	else:
		$error = TRUE;
	endif;
endif;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Halaman Login</h1>
<?php if(isset($error)):?>
<p style="color:red; font-style:italic;">Username Atau Password Salah</p>
<?php endif;?>
<form action="" method="post">
	<label for="username">Username</label><br/>
	<input type="text" name="username" id="username"><br/>
	<label for="password">Password</label><br/>
	<input type="password" name="password" id="password"><br/>
	<button type="submit" name="login">Login</button>
</form>

</body>
</html>