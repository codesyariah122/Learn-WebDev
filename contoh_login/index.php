<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Page | <?=$_SESSION['fullname']?></title>
	<link rel="stylesheet" href="assets/core.css">
	<style type="text/css">
		li{
			list-style: none;
		}	
	</style>

</head>
<body>

	<fieldset>
		<legend>Page | <?=$_SESSION['email']?></legend>

		<ul>
			<li>
				<a href="logout.php">Logout</a>
			</li>
		</ul>


		<h1>Welcome ... <?=$_SESSION['fullname']?></h1>


	</fieldset>

</body>
</html>