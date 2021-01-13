<?php
//puji ermanto - CodeSyariah(2019)
//object oriented programming
//PHP-7
/*
@reusability @visibility
@inheritance @abstraction
@interface
*/
require_once 'App/Init.php';

//inisialisasi dengan aliasi
use App\Produk\InfoProduk as Info;
use App\Produk\Produk as Produk;

use App\Produk\Komik as Komik;
use App\Produk\Game as Game;

use App\Produk\CetakInfoProduk as CetakInfo;

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

$produk1=new Komik("Naruto","Mishimo Kishimoto","Sonnen Jump",30000,100);

$produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",250000,10);

$info=new CetakInfo();
$info->tambahProduk($produk1);
$info->tambahProduk($produk2);
echo $info->cetak();

echo "<hr>";

new ProdukUser;
echo "<br/>";
new ServiceUser;