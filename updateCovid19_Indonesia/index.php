<!-- 
source-code : 	https://github.com/codesyariah122/Learn-WebDev/blob/master/updateCovid19_Indonesia/readme.md
author  : Puji Eramnto
update : aug-2020
Semoga lekas sembuh semuanya
 -->
<?php require_once 'curl.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Covid19 Indonesia</title>
<style type="text/css">
	table{
		margin-top: 5rem;
		border-collapse: collapse;
		border: 0px solid black;
	}
	th{
		background: rgb(50, 115, 220);
		color: hsla(185, 49%, 89%, 1);
		padding: .8rem;
	}
	td{
		text-align: center;
		color: #fff;
		font-weight: bold;
		padding: .8rem;
		background: hsla(212, 68%, 6%, 1);
	}
	td:hover{
		background: coral;
	}
	select{
		margin-top: .9rem;
		margin-bottom: -1.9rem;
	}
	.detail{
		color: #fff;
		background: hsla(355, 90%, 57%, 1);
		cursor: pointer;
	}
	.detail:hover{
		background:hsla(290, 62%, 37%, 1);
		color:#fff;
	}
	#detail{
		margin-top: 2rem;
		width: 70%;
		height: auto;
		background:rgba(0,0,0, 255);
	}
	fieldset{
		color: #eefff0;
	}
</style>
</head>
<body>

<?php  
$data = curl('https://data.covid19.go.id/public/api/prov.json')['list_data'];
$lastUpdate = curl('https://data.covid19.go.id/public/api/prov.json')['last_date'];
?>
<?php //var_dump($data); die; ?>

<h1>Update Covid 19 Indonesia </h1>
<h3>Last Update : <?=$lastUpdate?></h3>
<select>
	<option>-Pilih Provinsi-</option>
<?php  $i=0; do{ ?>	
	<option value="<?=$i?>"><?=$data[$i]['key']?></option>
<?php $i++; }while($i <= count($data)-1); ?>	
</select>

<div id="data">
	<table>
		<tr>
			<th>Provinsi</th>
			<th>Jumlah Kasus</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
			<th>Dirawat</th>
			<th>Aksi</th>
		</tr>
		<tr id="result">
		</tr>
	</table>

</div>
	

	<div id="detail"></div>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>
