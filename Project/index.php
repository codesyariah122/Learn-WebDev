<?php
//koding kala weekend cerita
//kopinya neng .... jangan lupa
//jangan panik yah neng
/*
             ****
             simple
      autoloader namespace
           inheritance
             *****
pujiermanto(codesyariah - 2019)
*/

require_once(dirname(__FILE__)) .'/AutoLoader.php';


echo $base::sayHallo();

//yuk Bayar zakat
$zakat->setZakat(3000000,2000000);
$zakat->getZakat();

$add->getAdd(5,4);

$sub->getSub(10,5);

$mult->getMult(100.55,45.01);

$div->getDiv(100.5,2500.4);

$mod->getMod(10,2);

$x->getGanjilGenap(19);