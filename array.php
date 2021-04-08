<?php

    $linguagem = ["PHP", "Java", "C", "C++", "C#"];

    var_dump($linguagem);

    // Acessando através de um index
    //echo $linguagem[4];

    $contador = 0;
    // Acessando todos elementos com o laço de repetição for
    for($i = 0; $i < $contador.sizeof($linguagem, COUNT_NORMAL); $i++){
        echo $linguagem[$i] . "<br>";
    }

    $i = 0;
    echo "Laço while <br>" ;
    while($i < $contador.sizeof($linguagem, COUNT_NORMAL)){
        echo $linguagem[$i] . "<br>";
        $i++;
    }

    
