<?
//autoloader class
function autoLoader($class)
{
    $file = "classes/{$class}.php";
    if (is_readable($file)) {
       require_once $file;
    }
}