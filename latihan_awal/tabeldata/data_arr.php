<?
$data=[
  "head"=>[
  1=>"ip address",
  2=>"server name",
  3=>"machine name"
  ],

  "data"=>[
  1=>$_SERVER['REMOTE_ADDR'],
  2=>$_SERVER['SERVER_NAME'],
  3=>shell_exec("uname -a")
  ]
];
echo "<pre>";
print_r($data);
echo "</pre>\n";

/*
echo $_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PROTOCOL']."<br/>";
echo "<pre>";
echo shell_exec("ls -lart")."
</pre>
<br/>";
*/
//ternary
/*
$nilai = 6;
$predikat = $nilai > 8
  ? 'Sangat Baik' :
( $nilai >= 7 && $nilai <= 8
 ? 'Baik' :
 ($nilai <= 6 && $nilai > 5
  ? 'Sedang' : 'Kurang') );
echo $predikat; // Sedang
*/
