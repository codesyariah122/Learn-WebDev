<?php
require_once 'config.php';

function connect()
{
	$conn = mysqli_connect(HOST, USER, PASS, DB);

	if(!$conn):
		echo "Connect Error : ".mysqli_connect_error($conn);
	endif;

	return $conn;
}

function signup($data, $table)
{
	$email = htmlspecialchars(strtolower(stripslashes($data['email'])));
	$password = mysqli_real_escape_string(connect(), $data['password']);
	$confirm = mysqli_real_escape_string(connect(), $data['password2']);
	$fullname = htmlspecialchars(strtolower(stripslashes($data['fullname'])));


	if(empty($email) AND empty($password) OR empty($confirm) AND empty($fullname)){

		echo "
			<script>
			alert('form signup belum diisi dengan benar');
			</script>
		";
		return false;
	}

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "
			<script>
			alert('Email tidak valid');
			</script>
		";
		return false;
	}

		$result = mysqli_query(connect(), "SELECT * FROM $table WHERE email = '$email'");

		if(mysqli_fetch_assoc($result)){
			echo "
			<script>
			alert('Email sudah terdaftar');
			</script>
			";
		return false;
		}

		if($password !== $confirm){

		echo "
			<script>
			alert('Pasword tidak sama');
			</script>
		";
		return false;
		}

		$password = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO $table (id, email, password, fullname) VALUES ('', '$email', '$password', '$fullname')";

		$result = mysqli_query(connect(), $sql);

		if(!$result){
			echo "Signup gagal ".$sql."<br/>".mysqli_error(connect());
		}else{
			header('Location:login.php?id=login');
		}

		return mysqli_affected_rows(connect());

}