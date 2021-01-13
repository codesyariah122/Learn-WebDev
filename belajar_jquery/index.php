<!DOCTYPE html>
<html>
<head>
	<title>Belajar Jquery</title>
<style type="text/css">
	
	#boxes-wrap{
	width:100px;
	height:100px;
	background-color:grey;
	}

	.change{
		background-color: salmon;
		color: #ffffff;
	}

</style>
	
</head>
<body>
	<h1>Belajar Jquery !</h1>

	
	<div id="box1">
		
	<div class="boxes">Baris Pertama</div>
	<div class="boxes">Baris Kedua</div>

<!-- <form>
	<input type="text" id="inputText">
	<input type="submit" value="submit">
</form> -->

<button id="btn1">Show</button>
<button id="btn2">Hide</button>
<button id="btn3">Toggle</button>

<script type="text/javascript" src="jquery.js"></script> 

<script type="text/javascript">

	$('#btn1').click(function(){
		$('#box1').slideDown();
	})

	$('#btn2').click(function(){
		$('#box1').slideUp();
	})

	$('#btn3').click(function(){
		$('#box1').slideToggle();
	})
		
		// $(document).ready(function(){
			// $('h1').css('color', 'red');
			// $('#box1').css('font-weight', 'bold');
			// $('.boxes:first').css('color', 'firebrick');
			// $('.boxes:last').css('color', 'aqua');
			// $('.boxes:eq(2)').css('color', 'green');


			//--------------event-----------
			// $('h1').click(function(){
				// $('h1').css({
				// 	'color':'salmon',
				// 	'font-size': '3em',
				// 	'background-color': 'grey'
				// });	

			// 	$('h1').addClass('change');
			// 	$('h1').removeClass('change');

			// 	$('h1').toggleClass('change');

			// });

			// $('h1').mouseleave(function(){
			// 	$('h1').css('color', 'yellow');
			// })

			// $('.boxes').mouseenter(function(){
			// 	$(this).css('color', 'yellow');
			// });

		// 	$('form').submit(function(){
		// 		// let tulisan = $('#inputText').val();
		// 		// $('h1').text(tulisan);
		// 		event.preventDefault();
		// 	});

		// 	$('#boxes-wrap').prepend('<div>Halo</div>');

		// 	//remove dan empty
		// 	$('#boxes-wrap').remove();


		// });



</script>
 </body>
</html>