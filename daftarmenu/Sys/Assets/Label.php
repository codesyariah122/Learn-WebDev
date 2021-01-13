<?php
class Label extends Experience{
  //@label form
public function setLabel($data){
 //@setdata
 $this->data[]=$data;
  }

public function getLabel(){
echo "<label for='{$this->data[0]}'>{$this->data[1]}&nbsp;&nbsp;&nbsp;
";
  }

  public function debuging(){
    //echo "test test 123<br/>";
    echo "<pre>";
    print_r($this->data);
    echo "</pre>";
  }

}