<?php
session_start();
if(isset($_POST['go'])):
$nama=$_POST['nama'];
$email=$_POST['email'];
$bio=nl2br($_POST['bio']);
if(!empty($_POST['nama'])&&!empty($_POST['email'])&&!empty($_POST['bio'])):
$_SESSION['name']=$nama;
$_SESSION['email']=$email;
$_SESSION['bio']=$bio;
?>
<script language="javascript">
  alert("data berhasil di input");
  confirm("Anda <?=$nama;?>");
  window.location.href=".?page=<?=$_SESSION['name'];?>"
</script>

<?php else:?>

<script language="javascript">
  alert("data tidak diisi(kosong)");
  window.location.href=".?page=kosong";
</script>

<?php endif; endif;?>