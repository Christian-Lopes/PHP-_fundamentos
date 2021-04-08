<?php

    function calcular_IMC($peso, $altura): float {
        return $peso / ($altura * $altura);
    }

    var_dump(calcular_IMC(75, 1.65));