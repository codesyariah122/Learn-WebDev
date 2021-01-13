<?php
if(isset($_POST['tambah'])):

$nama_menu=$_POST['nama'];
$hrg_menu=$_POST['harga'];

if(!empty($nama_menu)&&!empty($hrg_menu)):

$dir="Menu";
$nm_file="menu.txt";

if(is_dir($dir)===false):
mkdir($dir);
endif;

if(file_exists($dir."/".$nm_file)):
$handle=fopen($dir."/".$nm_file,"a");

echo $handle;

$input=fwrite($handle,
"{$nama_menu}-{$hrg_menu}\n"
);

echo $input;

fclose($handle);

else://exists

echo "file sudah ada";
fclose($handle);
endif;
?>

<script language="javascript">
  alert("menu telah ditambahkan");
  window.location=".?id=success";
</script>

<?php else:?>

<script language="javascript">
  alert("gagal menambah menu");
  window.location=".?id=lost";
</script>

<?php
   endif;//emptypost
endif;//isset
?>