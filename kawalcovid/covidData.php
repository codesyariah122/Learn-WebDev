<?php 
$url = "https://api.kawalcorona.com/indonesia/provinsi";

$data = file_get_contents($url);

$data = json_decode($data, true);

// echo "<pre>";
// var_dump($data);
// echo "</pre>";

// die;