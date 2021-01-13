<?php 

//array
// variable yang dapat memiliki banyak nilai

// membuat array
// cara lama

// elemen pada array boleh memiliki tipe data yang berbeda

//pasangan antara key dan value
//key nya adalah index, yang dimulai dari nol

$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at");

// //cara baru
// $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

// $arr1 = [123, "Tulisan", false];

echo "<pre>";
var_dump($hari);
echo "</pre>";

// echo "<pre>";
// print_r($bulan);
// echo "</pre>";

// echo "<br/>";

// echo $arr1[0]."<br/>";

// echo $bulan[1];

$hari[] = "Sabtu";


echo "<pre>";
var_dump($hari);
echo "</pre>";