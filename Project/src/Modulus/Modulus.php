<?php
namespace src\Modulus;
class Modulus extends \src\BaseClass\BaseClass{

  public function getMod($a,$b){
    $this->result=$a % $b;

    echo "Modulus of {$a} and {$b} is <span class='hasil'> {$this->result} </span><br>".PHP_EOL;

  }
}