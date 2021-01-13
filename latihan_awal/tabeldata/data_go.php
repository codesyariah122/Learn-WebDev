<?php
$data_=[
  "Cimahi Selatan"=>
["kode pos"=>
  [
    "Cibeber"=>40531,
    "Lewigajah"=>40532,
    "Utama"=>40533,
    "Melong"=>40534,
    "Cibereum"=>40535
  ],
 "Luas Area"=>
  [
    "Cibeber"=>332.56,
    "Lewigajah"=>393.473,
    "Utama"=>1654.30,
    "Melong"=>405.515,
    "Cibereum"=>387.431
  ]

]

];
echo "<pre>";
var_dump($data_);
echo "</pre>";
echo "<br>";
echo $data_["Cimahi Selatan"]["kode pos"]["Melong"];