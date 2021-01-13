<?php
class Index extends Experience {

  public function setIndex($data){
    $this->data[]=$data;
  }
  public function getIndex(){
    return "<!DOCTYPE html='lang-en'>
      <meta charset='utf-8'>
      <head>
      <title>{$this->data[0]}</title>
      </head>
      <body>
      <h1>{$this->data[1]}</h1>
      <fieldset>
      <legend><em><b>{$this->data[2]}</b></em></legend>
      ";
  }
  public function getClose(){
    return "</fieldset>
    </body>
    </html>
    ";
  }

  public function debuging(){
    //echo "test test 123<br/>";
    echo "<pre>";
    print_r($this->data);
    echo "</pre>";
  }
}