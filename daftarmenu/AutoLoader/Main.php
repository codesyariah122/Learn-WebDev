<?php
function __autoload($class) {
  $file = $class . ".php";
  if (is_readable($file)) {
    require $file;
  }
}


$bar=new Bar;
$bar->someFunction();

$foo=new Foo;
$foo->anotherFunction();