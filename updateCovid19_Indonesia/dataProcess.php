<?php
session_start();
/* 
source-code : 	https://github.com/codesyariah122/Learn-WebDev/blob/master/updateCovid19_Indonesia/readme.md
author  : Puji Eramnto
update : aug-2020
Semoga lekas sembuh semuanya
*/

require_once 'curl.php';

if( is_numeric(@$_GET['provinsi']) ){
	$provinsi = @$_POST['provinsi'];
	$_SESSION['key'] = $provinsi;
	$data = curl('https://data.covid19.go.id/public/api/prov.json')['list_data'][$provinsi];
	// echo count($data); die;
?>
	<td id="key" data-key="<?=$_SESSION['key']?>"><?=$data['key']?></td>
	<td><?=number_format($data['jumlah_kasus'], 0)?></td>
	<td><?=number_format($data['jumlah_sembuh'], 0)?></td>
	<td><?=number_format($data['jumlah_meninggal'], 0)?></td>
	<td><?=number_format($data['jumlah_dirawat'], 0)?></td>
	<td><button class="detail" id="<?=$data['key']?>">Detail Lainnya</button></td>

<?php }?>

<script type="text/javascript" src="detail.js"></script>
