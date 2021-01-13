<?php
class Debuging extends Experience {

   public function debuging(){
    //echo "test test 123<br/>";
    echo "<pre>";
    print_r($this->data);
    echo "</pre>";
  }
}