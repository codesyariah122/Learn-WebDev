<?php 
session_start();
require_once 'curl.php'; 
if(is_numeric(@$_GET['key'])):
	$key = @$_POST['key'];
	$data = curl('https://data.covid19.go.id/public/api/prov.json')['list_data'][$key];
	unset($_SESSION['key']);
	session_destroy();
?>

<fieldset>
	<legend>Detail data <b><?=$data['key']?></b></legend>
	<h3>Penambahan kasus : </h3>
	<ul>
		<li>Positif : <?=$data['penambahan']['positif']?></li>
		<li>Sembuh : <?=$data['penambahan']['sembuh']?></li>
		<li>Meninggal : <?=$data['penambahan']['meninggal']?></li>
	</ul>

	<h3>Detail berdasarkan jenis kelamin : </h3>
	<ul>
		<li>Laki-laki : <?=$data['jenis_kelamin'][0]['doc_count']?></li>
		<li>Perempuan : <?=$data['jenis_kelamin'][1]['doc_count']?></li>
	</ul>

	<h3>Detail berdasarkan kelompok umur : </h3>
	<ul>
		<li><?=$data['kelompok_umur'][0]['key']?> Tahun : <?=$data['kelompok_umur'][0]['doc_count']?></li>
		<li><?=$data['kelompok_umur'][1]['key']?> Tahun : <?=$data['kelompok_umur'][1]['doc_count']?></li>
		<li><?=$data['kelompok_umur'][2]['key']?> Tahun : <?=$data['kelompok_umur'][2]['doc_count']?></li>
		<li><?=$data['kelompok_umur'][3]['key']?> Tahun : <?=$data['kelompok_umur'][3]['doc_count']?></li>
		<li><?=$data['kelompok_umur'][4]['key']?> Tahun : <?=$data['kelompok_umur'][4]['doc_count']?></li>
		<li><?=$data['kelompok_umur'][5]['key']?> Tahun : <?=$data['kelompok_umur'][5]['doc_count']?></li>
	</ul>
</fieldset>

<?php endif; ?>