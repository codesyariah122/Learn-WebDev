<?php
class Form extends Experience{
  //set form
  public function setForm($data){

  #@setdata
   $this->data[]=$data;
  }
public function getForm(){
echo "<form action='{$this->data[0]}' method='{$this->data[1]}'>
<br/>
";
  }

  public function debuging(){
    echo "<pre>";
    print_r($this->data);
    echo "</pre>";
  }

}