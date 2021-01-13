<?php  
session_start();

if(isset($_SESSION['login'])){
	$fullname = password_hash($_SESSION['fullname'], PASSWORD_DEFAULT);
	header('Location:index.php?page='.$fullname);
}

require_once 'functions.php';

if(isset($_REQUEST['signup']) > 0){
	if(signup($_REQUEST, 'user')){
		$success = true;
	}else{
		echo "<script>
		alert('Signup gagal');
		document.location.href='signup.php?id=error'
		</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup | Page</title>


	<style type="text/css">
			
			li{
				list-style: none;
				margin-top:1rem;
			}
			.email{
				margin-left: 2.3rem;
			}
			.password{
				margin-left:0.5rem;
			}
			.confirm{
				margin-left: 1.2rem;	
			}
			.fullname{
				margin-left: 0.7rem;
			}

			button{
				margin-top: 2rem;
				border:none;
				display:inline-block;
				background-color: #eec00e;
				font-size: 18px;
				padding:10px 15px;
				border-radius:20px;
			}

	</style>


</head>
<body>

	<fieldset>
		<legend>Form Signup</legend>

		<form action="" method="post">
			
			<ul>
				<li>
					<label for="email">Email : </label>
					<input type="text" name="email" id="email" class="email">
				</li>
				<li>
					<label for="password">Password : </label>
					<input type="password" name="password" id="password" class="password">
				</li>
				<li>
					<label for="confirm">Confirm : </label>
					<input type="password" name="password2" id="confirm" class="confirm">
				</li>
				<li>
					<label for="fullname">Fullname : </label>
					<input type="text" name="fullname" id="fullname" class="fullname">
				</li>
				<button type="submit" name="signup">Signup</button>
			</ul>

		</form>

	</fieldset>

</body>
</html>