<?php

    $pessoa = [
        "nome" => "Christian",
        "idade" => 30,
        "peso" => 70,
        "altura" => 1.65,
        "sexo" => "Masculino"
    ];

    var_dump($pessoa);

    echo "Nome {$pessoa['nome']} do sexo {$pessoa['sexo']}";