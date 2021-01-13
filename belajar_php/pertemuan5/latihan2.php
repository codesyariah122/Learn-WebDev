<?php
//pengulangan pada array
// for / foreach

$angka = [3, 5, 7, 8];
$angka[] = 15;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color:salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>
<?php for($i=0; $i < count($angka); $i++):?>
	<div class="kotak"><?= $angka[$i] ?></div>
<?php endfor;?>

<div class="clear"></div><br/>

<?php foreach($angka as $nilai): ?>
	<div class="kotak"><?php echo $nilai ?></div>
<?php endforeach;?>

<div class="clear"></div>



</body>
</html>