<?php
require_once __DIR__.'/Script5-1.php';

if(isset($_REQUEST['GO'])):
	$nilaiJual=$_REQUEST['nilaijual'];

endif;
?>
<html>
<head>
<title>Salesman Komisi</title>
</head>
<body>
<?php
if(isset($_GET['id'])){
	if($_GET['id']=='0'){
	echo "<script language='javascript'>alert('anda harus mengisi form nilai jual');document.location='panggil5-1.php?id=reply';</script>";
	}
}
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method='post'>
<label for='nilaijual'>Nilai Jual</label>
<input type='number' name='nilaijual' id='nilaijual'>
<button type='submit' name='GO'>ENTER SALESMAN</button><br/>
</form>
<fieldset>
<legend><h3>Pendapatan SALESMAN</h3></legend>
<?php
if(isset($_REQUEST['GO'])){
if(!empty($nilaiJual)):
	$salesman=new SalesMan();
	$salesman->setPenjualan($nilaiJual);
	$salesman->getPenjualan();

else:
?>
  <script language="javascript">
    window.location.href='panggil5-1.php?id=0';
  </script>

<?php endif;}?>
</fieldset>
</body>
</html>