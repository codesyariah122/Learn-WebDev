<?php 
session_start();

if(!isset($_SESSION['login'])){
	header('Location:login.php');
}

require_once 'functions.php';

$id = $_GET['id'];

if(hapus($id)):
	echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href='index.php';
			</script>
	";

else:

	echo "
			<script>
				alert('data gagal dihapus');
				document.location.href='index.php';
			</script>
	";
	
endif;
?>