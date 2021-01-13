<?php
//_CodeSyariah-2019
//AutoLoader Method
spl_autoload_register( function($class){
  $class=explode('\\',$class);

  /*echo "<pre>";
  print_r($class);
  echo "</pre>";*/

  $class=end($class);

  require_once __DIR__.'/Produk/'.$class. '.php';

});

spl_autoload_register( function($class){
  $class=explode('\\',$class);

  /*echo "<pre>";
  print_r($class);
  echo "</pre>";*/

  $class=end($class);

 require_once __DIR__.'/Service/'.$class. '.php';

});