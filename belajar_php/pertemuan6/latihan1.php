<!DOCTYPE html>
<html>
<head>
	<title>latihan array associative</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: #BADA55;
			text-align: center;
			line-height: 50px;
			margin: 5px;
			float: left;
			transition: 1s;
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>

	<?php  
		$angka=[
					[1,2,3],
					[4,5,6],
					[7,8,9]
				];
	?>
	<?php foreach($angka as $a): ?>
		<?php foreach($a as $x): ?>
	<div class="kotak"><?= $x ?></div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach;?>

</body>
</html>