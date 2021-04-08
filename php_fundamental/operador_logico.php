<?php

$a = 2 == 2;
$b = 2 == 5;
$c = 5 == 5;

$logico = [
    '&&' => $a && $c, // && ou and
    '||' => $a || $c, // || ou  or
    'xor' => $a xor $b
];

var_dump($logico);