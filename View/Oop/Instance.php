<?php
require_once 'App/Init.php';
use \App\Produk\InfoProduk as Info;
use \App\Produk\Produk as Produk;

use \App\Produk\Komik as Komik;
use \App\Produk\Game as Game;

use \App\Produk\CetakInfoProduk as CetakInfo;

use \App\Produk\User as User;
use \App\Service\User as Users;

$produk1=new Komik("Naruto","Mishimo Kishimoto","Sonnen Jump",30000,100);

$produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",250000,10);
