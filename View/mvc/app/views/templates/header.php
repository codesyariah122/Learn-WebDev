<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?=BASEURL;?>css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>halaman <?=$data['judul']?></title>
</head>
<body>

<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="<?=BASEURL?>">Mvc App</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?=BASEURL?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?=BASEURL?>about/">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?=BASEURL?>mahasiswa/">Mahasiswa</a>
	      </li>
	    </ul>
	  </div>
	</nav>	
</div>

