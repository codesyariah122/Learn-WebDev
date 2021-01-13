<?php
//trait
trait Ucapan  {
  public function salam($nama){
    $this->nama=$nama;
    return "Pagi ... {$this->nama}<br>".PHP_EOL;
  }
}