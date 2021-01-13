<?php
//koding senjakala cerita
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
namespace src\Add;

class Add extends \src\BaseClass\BaseClass{

  //Setup calculator method
  public function getAdd($a,$b){

    $this->result=$a + $b;

    echo "Sum of {$a} and {$b}
    is
    <span class='hasil'>
    {$this->result}</span>
    <br>\n";
  }

}