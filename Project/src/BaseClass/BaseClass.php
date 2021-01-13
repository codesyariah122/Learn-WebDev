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
namespace src\BaseClass;

  class BaseClass{

  private $result;

   public static function sayHallo(){

   return
   "<style>
     .hasil{
      color:salmon;
      font-size:25px;
      font-weight:bold;
           }
      .hasil-ganjil{
       color:orange;
       font-size:25px;
       font-weight:bold,italic;
           }

      .hasil-genap{
       color:salmon;
       font-size:25px;
       font-weight:bold;
           }

      .hasil-err{
       color:#CC0000;
       font-size:25px;
       font-weight:bold,italic;
           }

      .persen{
       color:orange;
       font-size:25px;
       font-weight:bold;
           }
    </style>

    <h1>Selamat Datang...</h1>
     <br/>
  <h4> Anda sedang berada di :<span class='hasil'> ".BaseClass::class."</span></h4>
  ";

   }

}