<?php
class GFG {


public function test __call($name, $arguments) {

echo "Calling object method <b>'$name' </b>". implode(', ', $arguments). "<br>";
    }


    public static function test __callStatic($name, $arguments) {

echo "Calling static method <b>'$name' </b>". implode(', ', $arguments). "<br>";
    }
}

// Create new object
$obj = new GFG;

$obj->runTest('in object context');

GFG::runTest('in static context');

?>