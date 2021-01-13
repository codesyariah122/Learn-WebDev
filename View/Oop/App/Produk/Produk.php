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

Abstract class Produk{
  protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon=0;//%
/*Readme :
//Abstract harus mempunyai satu method abstract sebagai templating nya. untuk implementasi nya di class turunannya.
*/
Abstract public function getInfo();

  public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
    $this->judul=$judul;
    $this->penulis=$penulis;
    $this->penerbit=$penerbit;
    $this->harga=$harga;
  }

  public function setJudul($judul){
    $this->judul=$judul;
  }
  public function getJudul(){
    return $this->judul;
  }

  public function setPenulis($penulis){
    $this->penulis=$penulis;
  }
  public function getPenulis(){
    return $this->penulis;
  }

  public function setPenerbit($penerbit){
    $this->penerbit=$penerbit;
  }
  public function getPenerbit(){
    return $this->penerbit;
  }

  public function setDiskon($diskon){
    $this->diskon=$diskon;
  }
  public function getDiskon(){
    return $this->diskon;
  }

  public function setHarga($harga){
    $this->harga=$harga;
  }
  public function getHarga(){
    return $this->harga-($this->harga*$this->diskon/100);
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }


}