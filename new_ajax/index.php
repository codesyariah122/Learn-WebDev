<!DOCTYPE html>
<html>
<head>
	<title>Crud with PDO</title>
</head>
	
	<style type="text/css">
		body{
			font-family: arial;
		}
	</style>

<body>

<div style="margin-bottom: 10px;">
	<button id="add">Add New Data</button>
</div>

<div id="view_data" style="margin-bottom: 10px;">
	<?php include 'view_data.php'; ?>
</div>

<div id="crud_data"></div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript">
	$('#add').click(function(){
		$('#crud_data').hide().load('add.php').fadeIn(1000);
	})

	$('#crud_data').on("click", '#add', function(){
		let product_code = $('#product_code').val();
		let product_name = $('#product_name').val();
		let product_price = $('#product_price').val();
		if(product_code == '' || product_name == '' || product_price == ''){
			alert("Form data is empty, please try again");
		}else{
			$.ajax({
				url: 'process.php?page=add',
				type: 'post',
				data: 'product_code='+product_code+'&product_name='+product_name+'&product_price='+product_price,
				success: function(response){
					if(response == 'success'){
						$('#view_data').load('view_data.php');
					}else{
						alert("Failed add new product");
					}
				}
			});
		}
	});

$("#view_data").on("click", ".edit", function(){
	let id = $(this).attr("id");
	$.ajax({
		url: 'edit.php',
		type: 'post',
		data: 'id='+id,
		success: function(response){
			$('#crud_data').hide().fadeIn(1000).html(response);
		}
	});
});

$('#crud_data').on("click", '#edit', function(){
		let product_code = $('#product_code').val();
		let product_name = $('#product_name').val();
		let product_price = $('#product_price').val();

		let id_product = $('#id_product').val();

		if(product_code == '' || product_name == '' || product_price == ''){
			alert("Form data is empty, please try again");
		}else{
			$.ajax({
				url: 'process.php?page=edit',
				type: 'post',
				data: 'product_code='+product_code+'&product_name='+product_name+'&product_price='+product_price+'&id='+id_product,
				success: function(response){
					if(response == 'success'){
						$('#view_data').load('view_data.php').fadeIn(1000);
						$('#crud_data').hide();
					}else{
						alert("Failed add new product");
					}
				}
			});
		}
	});


$("#view_data").on("click", ".hapus", function(){
	let id = $(this).attr("id");
	let ask = confirm("are your really to delete?");
	if(ask){
		$.ajax({
			url: 'process.php?page=delete',
			type: 'post',
			data: 'id='+id,
			success: function(response){
				if(response == 'success'){
					$('#view_data').load('view_data.php');
					$('#crud_data').hide();
				}else{
					alert("Failed add new product");
				}
			}
		});
	}

});
</script>
</body>
</html>