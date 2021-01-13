<?php
class Autoloader {
  public static $path=[];
  public static $ext=".php";

  public static function load($className){
    $allPath=static::$path;

    if(!class_exists($className)):

    foreach($allPath as $k => $v):
    if(file_exists($v.$className.static::$ext)){
include $v.$className.static::$ext;
      break;
    }
    endforeach;
    endif;

    if(!class_exists($className)):
      die('<br/>Tidak dapat
            memanggil class'.
            $className.'<br/>');
    endif;
  }

  public static function addPath($path=''){
    if(is_string($path)):
    if(!in_array($path, $allPath)):
      return $allPath[]=$path;
    endif;//is_string
    elseif(in_array($path)):
    foreach($path as $v):
    self::addPath($v);
    endforeach;
    endif;
  }
}

spl_autoload_register('AutoLoader::load');