<?php

$numeros = [
    [1, 2, 3, 4],
    [3, 4, 5, 6],
    [7, 8, 9, 0],
];

echo $numeros[0][3];
echo $numeros[1][3];
echo $numeros[2][3];

$curso = [
   'PHP'=> [
        'nome' => 'PHP',
        'tempo' => 120,
        'valor' => 1200.00,
        'status' => true,
        'vagas' => 30,
    ],
    'Java' => [
        'nome' => 'Java',
        'tempo' => 120,
        'valor' => 1200.00,
        'status' => false,
        'vagas' => 30,
    ],
];

$curso['PHP']['requisito'] = 'Lógica de Programação';

var_dump($curso);