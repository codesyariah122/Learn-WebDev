<?php
//koding kala weekend
/*
             ****
             simple
      autoloader namespace
           inheritance
             *****
pujiermanto(codesyariah - 2019)
*/
namespace app\BaseClass;

  class BaseClass{

  private $result;
  private $title;
  private $page;

  public function getTitle($title)
  {
    $this->title=$title;
    echo $this->title;
  }

   public static function sayHallo(){

   return "
   <h1>Selamat Datang...</h1>
     <br/>
  <h4> Anda sedang berada di :<span class='hasil'> ".BaseClass::class."</span></h4>
  ";

   }

}