<?php
require_once __DIR__.'/Script5-2.php';

if(isset($_REQUEST['enter'])):
	$gajipokok=$_REQUEST['gajipokok'];
	$tunjangan=$_REQUEST['tunjangan'];
endif;
?>
<html>
<head>
<title>Gaji Bersih Karyawan</title>
</head>
<body>
<?php
if(isset($_GET['id'])){
	if($_GET['id']=='errr'){
		echo "<script language='javascript'>alert('Form Gaji Pokok / Tunjangan harus diisi dengan benar dan sesuai');
		document.location='panggil5-2.php?id=reply';</script>";
	}
}
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<label for='gajipokok'>Gaji Pokok</label>
<input type='number' name='gajipokok' id='gajipokok'><br/>
<label for='tunjangan'>Tunjangan</label>
<input type='number' name='tunjangan' id='tunjangan'><br/>
<button type='submit' name='enter'>SUBMIT</button><br/>
</form><br/>
<fieldset>
<legend><h3>Gaji Bersih Karyawan</h3></legend>
<?php
if(isset($_REQUEST['enter'])){
	if((!empty($gajipokok))&&(!empty($tunjangan))):
	$gajiKaryawan=new Gaji();
	$gajiKaryawan->setGajibersih($gajipokok,$tunjangan);
	$gajiKaryawan->getGajibersih();

	else:
?>

<script language="javascript">
    window.location.href='panggil5-2.php?id=errr';
  </script>

  <?php endif;}?>
</fieldset>

</body>
</html>