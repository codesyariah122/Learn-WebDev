<?php
/*
require_once(__DIR__) . '/../Smartphone.php';
require_once(__DIR__) . '/Iphone/Smartphone.php';
require_once(__DIR__) . '/Lenovo/Smartphone.php';
require_once(__DIR__) . '/Samsung/Smartphone.php';
*/

spl_autoload_register(function($class){

  $class=explode('\\',$class);

  // echo "<pre>";
  // var_dump($class);
  // echo "</pre>";

  $class=end($class);


  require_once $class.'/'.$class.'.php';

});

/*
spl_autoload_register(function($class){

  $class=explode('\\',$class);
  $class=end($class);

  require_once $class.'/'.'.php';

});
*/