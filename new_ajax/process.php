<?php
require 'connection.php';
	$product_code = @$_POST['product_code'];
	$product_name = @$_POST['product_name'];
	$product_price = @$_POST['product_price'];
	$id = @$_POST['id'];

if(@$_GET['page'] == 'add'){

	$insertProduct = $db->prepare("INSERT INTO `product` (id, product_code, product_name, product_price) VALUES ('', ?, ?, ?)");
	$insertProduct->bindParam(1, $product_code);
	$insertProduct->bindParam(2, $product_name);
	$insertProduct->bindParam(3, $product_price);

	$insertProduct->execute();

	if($insertProduct->rowCount() > 0){
		echo "success";
	}
	
	
		
}elseif(@$_GET['page'] == 'edit'){
	$edit = $db->prepare("UPDATE `product` SET product_code=?, product_name=?, product_price=? WHERE `id` = ? ");
	$edit->execute([$product_code, $product_name, $product_price, $id]);
	
	if($edit->rowCount() > 0){
		echo "success";
	}

}elseif(@$_GET['page'] == 'delete'){
	$delete = $db->prepare("DELETE FROM `product` WHERE id = :id");
	$delete->bindParam(":id", $id);
	$delete->execute();

	if($delete->rowCount() > 0){
		echo "success";
	}
}