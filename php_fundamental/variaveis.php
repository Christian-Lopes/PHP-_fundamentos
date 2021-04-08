<?php

$int = 10;
$string = "Christian";
$boolean = true;
$obj = new StdClass();
$obj->getName = "Chrsitan";
$float = 10.90;
$array = (["número",
            10000000,
            30.50,
            true]);

var_dump($obj, $int, $string, $boolean, $float, $array);

print_r($obj);