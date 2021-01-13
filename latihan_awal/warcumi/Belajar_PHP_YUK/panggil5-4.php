<?php
require_once (dirname(__FILE__)).'/Script5-4.php';
if(isset($_REQUEST['start'])):
$totalDetik=$_REQUEST['totaldetik'];
endif;
?>
<html>
<head>
<title>Konversi Satuan Waktu</title>
</head>
<body>
<?php
if(isset($_GET['id'])){
	if($_GET['id']=='errrr'):
	echo "
	<script language=\"javascript\">alert(\"Form Total Detik harus diisi untuk memulai konversi ke satuan waktu\");document.location=\"panggil5-4.php?id=next\";</script>";
	endif;
}
?>
<fieldset>
<legend><h3>Konversi Satuan Waktu</h3></legend>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<label for="totaldetik">Total Detik </label>
<input type="number" name="totaldetik" id="totaldetik"><br/><br/>
<button type="submit" name="start">Mulai Konversi</button>&nbsp;&nbsp;&nbsp;<button type="reset">Ulangi Input</button><br/><br/>
</form><br/>
</fieldset>

<fieldset><legend><h3>Table Hasil Konversi Waktu</h3></legend>

<?php
if(isset($_REQUEST['start'])){
	if(!empty($totalDetik)):
	$konversiWaktu = new KonversiDetik($totalDetik);
	$konversiWaktu->mulaiKonversi();
	else:
?>


  <script language="javascript">
    window.location.href='panggil5-4.php?id=errrr';
  </script>

<?php endif;}?>

</fieldset>

</body>
</html>