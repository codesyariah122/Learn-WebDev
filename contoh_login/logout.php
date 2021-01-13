<?php

session_start();

$_SESSION[] = "";

setcookie('id', '', time()-120);
setcookie('key', '', time()-120);

session_unset();
session_destroy();

header('Location:login.php?page=logout');