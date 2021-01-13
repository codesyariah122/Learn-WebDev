<?php
//secure form input
//codesyariah
require_once(dirname(__FILE__)). '/Loader/Loader.php';
use Loader\Loader\Loader as Load;
$loader=new Load;
$loader->jalankan();


//instans before running
require_once(dirname(__FILE__)). '/Loader/Instantiasi.php';

echo $index->getIndex();

$form->getForm();
$labelname->getLabel();
$inputname->getInput();

$labelemail->getLabel();
$inputemail->getInput();

$buttonSubmit->getButton();
$buttonReset->getButton();
echo Experience::CLOSE;

echo $index->getClose();