<?php
class Dataku{
  private $data=[];

  public function callData($data1,$data2){

    //print_r($this->data);
  foreach($this->data as $mydata):
    echo $mydata."<br/>";
  endforeach;
  }
}