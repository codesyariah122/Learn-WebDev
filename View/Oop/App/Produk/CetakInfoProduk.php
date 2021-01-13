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

class CetakInfoProduk {

  private $daftarProduk=[];

  public function tambahProduk(\App\Produk\Produk $produk){
    $this->daftarProduk[]=$produk;
  }

  public function cetak
    (){

    $str="Daftar Produk : <br/>";

    foreach($this->daftarProduk as $p):
    $str .= "-{$p->getInfoProduk()}<br/>";
    endforeach;

    return $str;
  }

}