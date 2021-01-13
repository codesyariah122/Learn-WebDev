<?php
spl_autoload_extensions('.php');
spl_autoload_register();
/*
require_once 'animal/Dog.php';
require_once 'animal/Cat.php';
*/


use animals\Dog;
use animals\Cat;

$dog = new Dog;
$cat = new Cat;
// static_classes
Cat::name();
Cat::apperance();