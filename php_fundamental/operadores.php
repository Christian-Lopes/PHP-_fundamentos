<?php

$a = 10;
$b = 100;
$c = 2;

$calculos = [
    'soma' =>  $a + $b,
    'subtração' =>  $a - $b,
    'multiplicação' =>  $a * $b,
    'divisão' =>  $a / $b,
    'resto' => $a % $b,
    'exponencial' => $a ** $c,
];

var_dump($calculos);