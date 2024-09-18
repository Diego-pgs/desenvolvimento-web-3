<!--Desenvolva um programa que
    Leia
    4 números
    Calcule o quadrado de cada um
    Se o valor resultante do quadrado do terceiro for 1000 imprima o e finalize
    Caso contrário, imprima os valores lidos e seus respectivos quadrados -->

<?php

    $numeros = array("4","23","3","63");
    $resultado = array("0","0","0","0");

    for($i = 0; $i < 4; $i++){
        $resultado[$i] = $numeros[$i] * $numeros[$i];
    }

    if($resultado[2] == 25){
        echo "O quadrado de $numeros[2] é -> $resultado[2]";
    }else{
        for($i = 0; $i < 4; $i++){
            echo "O quadrado de [$numeros[$i]] é -> [$resultado[$i]] <br>";
        }
    }

?>