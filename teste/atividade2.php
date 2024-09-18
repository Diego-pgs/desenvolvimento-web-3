<!--Faça um programa que leia um número inteiro 
    e indique se este número é par ou ímpar, 
    e se é positivo ou negativo -->

<?php
    $numero = -2;

    if($numero % 2 == 0){
        echo "O numero [$numero] é par <br>";
    }else{
        echo "O numero [$numero] é impar <br>";
    }
    
    if($numero > 0){
        echo "Este numero é Positivo!";
    }elseif($numero < 0){
        echo "Este numero é Negativo!";
    }else{
        echo "0 ?? Neutro";
    }

?>