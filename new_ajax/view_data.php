<?php require_once 'connection.php'; ?>
<style type="text/css">
	table{
		border-collapse: collapse;
	}
	th, td{
		padding: 8px;
	}
</style>
<table border="1">
	<tr>
		<th>#</th>
		<th>Product Code</th>
		<th>Product Name</th>
		<th>Product Price</th>
		<th>Option</th>
	</tr>
<?php 
try{
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $db->query("SELECT * FROM `product`");
	$no=1;
	while($data = $sql->fetch(PDO::FETCH_LAZY)):
?>
	<tr>
		<td><?=$no?></td>
		<td><?=$data['product_code']?></td>
		<td><?=$data['product_name']?></td>
		<td><?=$data['product_price']?></td>
		<td>
			<button class="edit" id="<?=$data[0]?>">Edit</button>&nbsp;
			<button class="hapus" id="<?=$data[0]?>">Delete</button>
		</td>
	</tr>

<?php 
$no++;
	endwhile;

} catch(PDOException $e) {
	echo $e->getMessage();
}
?>

</table>