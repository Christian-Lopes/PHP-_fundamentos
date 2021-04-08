<?php

    $a = 2;
    $b = '2';
    $c = 11;
    $d = 0;

    $comparacao = [
        'igualdade' => $a == $b,
        'igualdade_tipo_diferente' => $a == $b,
        'igualdade_tipos' => $a === $b,
        'igualdade_tipos_indi' => $a !== $b,
        'diferente' => $a != $b,
        'maior' => $a > $c,
        'menor' => $a < $d,
        'menor_igual' => $a <= $c,
        'maior_igual' => $c >= $a,
    ];

    var_dump($comparacao);