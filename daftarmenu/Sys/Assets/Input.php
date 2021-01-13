<?php
class Input extends Experience{

  //@input form
  public function setInput($data){
    #@set data
    $this->data[]=$data;
  }
  public function getInput(){
echo "<input type='{$this->data[0]}' name='{$this->data[1]}' id='{$this->data[2]}'><br/><br/>
";
  }

public function debuging(){
    //echo "test test 123<br/>";
    echo "<pre>";
    print_r($this->data);
    echo "</pre>";
  }


}