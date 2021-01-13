<?php
#koding dikala senja
//penanganan class yang sama
//penanganan method yang sama
//@namespace codesyariah-2019
require_once 'App/Init.php';

use \Smartphone\Smartphone as roots;
$smartphone=new roots();
$smartphone->powerOn();

use \Samsung\Samsung as samsung;
$samsung=new samsung;
$samsung->powerOn();

use \Lenovo\Lenovo as Lenovo;
$lenovo=new Lenovo;
$lenovo->powerOn();

use \Iphone\Iphone as iphone;
$iphone=new iphone;
$iphone->powerOn();
