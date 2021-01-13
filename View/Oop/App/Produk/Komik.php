<?php
//puji ermanto - CodeSyariah(2019)
//object oriented programming
//PHP-7
/*
@reusability @visibility
@inheritance @abstraction
@interface
*/
namespace App\Produk;

class Komik extends \App\Produk\Produk implements \App\Produk\InfoProduk {

 private $jmlHalaman;

  public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0){
    parent::__construct($judul,$penulis,$penerbit,$harga);

    $this->jmlHalaman=$jmlHalaman;
  }


  public function getInfo(){
    $str="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }


  public function getInfoProduk(){
    $str="Komik : ".$this->getInfo()." ~{$this->jmlHalaman} Halaman.";

    return $str;
  }

}