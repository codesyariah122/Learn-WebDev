<?php
if(!isset($_GET['id'])):
header('location:test.php');

elseif(isset($_GET['id']) && isset($_GET['uid'])):
echo "USER ID = ". $_GET['id']."<br/>"."My ID = ". $_GET['uid']."<br/>";
endif;

include "style.css";