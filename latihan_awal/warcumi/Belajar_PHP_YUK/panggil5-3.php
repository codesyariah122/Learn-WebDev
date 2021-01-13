<?php
require_once (dirname(__FILE__)).'/Script5-3.php';
if(isset($_REQUEST['start'])):
$_jam=$_REQUEST['jam'];
$_menit=$_REQUEST['menit'];
$_detik=$_REQUEST['detik'];
endif;
?>
<html>
<head>
<title>Konversi Waktu Tempuh</title>
</head>
<body>
<?php
if(isset($_GET['id'])){
	if($_GET['id']=='errr'){
		echo '<script language=\'javascript\'>confirm(\'Haai harap isi form convert nya yah !!!\');document.location=\'panggil5-3.php?id=next\';</script>';
	}
}
?>
<fieldset>
<legend><h3>Convert Waktu Tempuh Ke Detik</h3></legend>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<label for="jam">Jam </label>
<input type="number" name="jam" id="jam">&nbsp;&nbsp;
<label for="menit">Menit </label>
<input type="number" name="menit" id="menit">&nbsp;&nbsp;
<label for="detik">Detik </label>
<input type="number" name="detik" id="detik"><br/><br/>
<button type="submit" name="start">Start Convert</button>&nbsp;&nbsp;&nbsp;<button type="reset">Ulangi </button>
</form><br/><br/>
</fieldset>

<fieldset>
<legend><h2>Hasil Conversi Waktu Anda</h2></legend>
<?php
if(isset($_REQUEST['start'])){

if((!empty($_jam))&&(!empty($_menit))&&(!empty($_detik))):

$_ConvertTime=new ConvertWaktuTempuh($_jam,$_menit,$_detik);
$_ConvertTime->getConvert();
else:
?>
  <script language="javascript">
    window.location.href='panggil5-3.php?id=errr';
  </script>
<?php endif;}?>

  </fieldset>
  </body>
  </html>