<?php
if(!isset($_GET['id'])):
header('location:home.php');

elseif(isset($_GET['id']) && isset($_GET['uid'])):
echo "
<b>
User ID = ".$_GET['uid']."<br/>
My ID = ".$_GET['id']."</b>
";
endif;