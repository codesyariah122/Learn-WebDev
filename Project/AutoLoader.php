<?php
//koding kala weekend
/*
             ****
             simple
      autoloader namespace
           inheritance
             *****
pujiermanto(codesyariah - 2019)
*/
spl_autoload_extensions('.php');
spl_autoload_register(function($class){

  $class=explode('\\',$class);

  echo "<pre>";
  var_dump($class);
  echo "</pre>";
  echo "<br/>";

  $class=end($class);

  if($class === "Profesi"){
  	require_once 'src/Zakat/'.$class.'/'.$class.'.php';
  }else{
  	
  require_once 'src/'.$class.'/'.$class.'.php';
  }

});


//instantiasi Base Class
use \src\BaseClass\BaseClass;
$base=new BaseClass;
//instantiasi Zakat profesi
use \src\Zakat\Profesi\Profesi;
$zakat=new Profesi;


//Instantiasi kalkulator masbro
use \src\Add\Add;
use \src\Substract\Substract;
use \src\Multiply\Multiply;
use \src\Divide\Divide;
use \src\Modulus\Modulus;
use \src\GanjilGenap\GanjilGenap;

$add=new Add;
$sub=new Substract;
$mult=new Multiply;
$div=new Divide;
$mod=new Modulus;
$x=new GanjilGenap;
