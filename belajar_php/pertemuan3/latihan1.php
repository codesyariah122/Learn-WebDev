<!DOCTYPE html>
<html>
<head>
	<title>latihan1</title>
<style>
	.warna-baris {
		background-color: silver;
	}
</style>
</head>
<body>

<table border="1" cellpadding="10" celspacing="0">
<?php for($i=1; $i <= 5; $i++):?>	
	<?php if ($i % 2 == 0): ?>
	<tr class="warna-baris">
		<?php else:?>
	<tr>
		<?php endif;?>
	<?php for($x=1; $x <= 5; $x++):?>
		<td><?=$i.','.$x?></td>
	<?php endfor;?>
	</tr>
<?php endfor;?>
	
</table>


</body>
</html>