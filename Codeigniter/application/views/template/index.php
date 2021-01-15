<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <!-- Bootstrap CSS -->
   <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Viga&display=swap" rel="stylesheet">
	<link href="<?=base_url() ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url() ?>/assets/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>/assets/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet" />	
	<ling href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    
    <title><?=$title?></title>

  </head>

  <body>
    
    <?=$header?>

    <div id="contentApp">    
      <div class="container">
	  		<?=$content?>
	  	</div>

	  	<?=$footer?>
	 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	   <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/Obj.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/MyJs.js">
    </script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/MyScript.js">
    </script>
  </body>
</html>