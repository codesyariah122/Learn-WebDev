<!DOCTYPE html>
<html>
<head>
	<title>Jquery My Zoom Image</title>

	<style type="text/css">
			/* styles unrelated to zoom */
		* { border:0; margin:0; padding:0; }
		p { position:absolute; top:3px; right:28px; color:#555; font:bold 13px/1 sans-serif;}

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}
		.zoom img::selection { background-color: transparent; }

		#ex2 img:hover { cursor: url(grab.cur), default; }
		#ex2 img:active { cursor: url(grabbed.cur), default; }
	</style>

	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='jquery.zoom.js'></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#ex1').zoom();
		})
	</script>


</head>
<body>

	<span class='zoom' id='ex1'>
		<img src='julie.jpg' width='350' height='320' alt='Daisy on the Ohoopee'/>
		<p>Hover</p>
	</span>
</body>
</html>