<?php  
require_once 'config.php';
$host = HOST;
$dbname = DB_NAME;
$user = DB_USER;
$pass = DB_PASS;

$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
