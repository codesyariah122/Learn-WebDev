<style type="text/css">
	li{
		list-style: none;
		margin-bottom: 2rem;
		padding: 2px;
	}
</style>
<fieldset>
	<legend><b>Edit Product Data</b></legend>
<?php  
require 'connection.php';
$id = @$_POST['id'];
$viewID = $db->query("SELECT * FROM `product` WHERE `id` = '$id'"); 
$data = $viewID->fetch(PDO::FETCH_OBJ);
?>

<ul>
	<li>
		<label for="product_code">Product Code</label>
		<input type="hidden" id="id_product" value="<?=$data->id?>">
		<input type="text" id="product_code" value="<?=$data->product_code?>">
	</li>
	<li>
		<label for="product_name">Product Name</label>
		<input type="text" id="product_name" value="<?=$data->product_name?>">
	</li>
	<li>
		<label for="product_price">Product Price</label>
		<input type="text" id="product_price" value="<?=$data->product_price?>">
	</li>
	<li>
		<button id="edit">Add New Product</button>
	</li>
</ul>

</fieldset>