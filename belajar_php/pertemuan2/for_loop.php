<!DOCTYPE html>
<html>
<head>
	<title>for loop</title>
</head>
<body>
<h1>Latihan loop for php</h1>

	<table border="1" cellpadding="10" cellspacing="0">
	<?php for($i = 1; $i <= 3; $i++):?>
	<tr>
	<?php for($j = 1; $j <= 5; $j++):?>
		<td><?=$i.','.$j?></td>
	<?php endfor;?>
	</tr>
	<?php endfor;?>		
	</table>

	<?php
	for($i = 5; $i > 15; $i--):
		echo "*";
	endfor;
	?>

</body>
</html>