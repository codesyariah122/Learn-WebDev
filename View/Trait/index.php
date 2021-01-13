<?php
/*
masih autoloader
problem solving
mekanisme trait
reuse code hierarki
*/
require_once 'AutoLoader.php';
//panggil autoLoader() nya untuk include setiap class
spl_autoload_register
                  ("autoLoader");

$pesan = new Pesan;
$pesan->salam("Code Syariah");
echo $pesan->salamKedua("Code Syariah");