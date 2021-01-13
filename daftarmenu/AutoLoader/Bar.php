<?php
class Bar{

  public function someFunction(){
     echo "Calling ". __FUNCTION__ ."() in class ". __CLASS__ ."<br>\n";
  }
}