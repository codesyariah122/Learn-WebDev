<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
<title>Latihan Post</title>
</head>

<body>
<fieldset><legend>Check Server Anda</legend</legend>
<form action="" method="post">
<label for="check_ip">Check Ip Address</label>&nbsp;&nbsp;
<button type="submit" name="check" id="check_ip" value="check_ip">Check Ip</button>
<button type="submit" name="check" value="clear">Clear Service</button>
</form>
</fieldset>

<fieldset>
<legend>Hasil cek server</legend>
<?php
switch($_REQUEST['check']):
case 'check_ip':
$ip = $_SERVER['REMOTE_ADDR'];
echo "<pre>";
echo $ip;
echo "</pre>";
break;
case 'clear':
shell_exec('clear');
break;
endswitch;
?>
</fieldset>
</body>
</html>
