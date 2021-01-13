<?php
//mekanisme trait
//codesyariah - 2019
//try..try
//hierarki
//reuse code
trait Selamat {
  private $jam,$times,$today,
          $defaultTime;

  public function salam($nama){

$this->defaultTime=date_default_timezone_set("Asia/Jakarta");
    $this->defaultTime;

$this->nama=$nama;

$this->jam=date('H');

$this->times=date($this->jam.":i:s");

$this->today=date("d-M-Y ".$this->times." A");

switch($this->jam):
case($this->jam>=00 && $this->jam<=10):
$this->salam="Pagi";
break;
case($this->jam>=10 && $this->jam<=15):
$this->salam="Siang";
break;
case($this->jam>=15 && $this->jam<=18):
$this->salam="Sore";
break;
case($this->jam===18):
$this->salam="Petang";
break;
case($this->jam>=18 && $this->jam<=23):
$this->salam="Malam";
break;
default;
$this->salam="Cedeum Bray Rek Hujan";
endswitch;

    echo "Today : ".$this->today."<br>".PHP_EOL;

    echo "Selamat {$this->salam}...{$this->nama}<br>".PHP_EOL;


  }


}