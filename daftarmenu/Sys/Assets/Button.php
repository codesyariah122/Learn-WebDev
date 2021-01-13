<?php
class Button extends Experience{

  //@button form
  public function setButton($data){
  #@set data
    $this->data[]=$data;
  }
  public function getButton(){
  echo "<button type='{$this->data[0]}' name='{$this->data[1]}'>{$this->data[2]}</button>&nbsp;&nbsp;
";
  }

  public function debuging(){
    //echo "test test 123<br/>";
    echo "<pre>";
    print_r($this->data);
    echo "</pre>";
  }

}