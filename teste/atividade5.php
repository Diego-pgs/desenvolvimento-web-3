<!--Elabore um algoritmo que dada a idade de um nadador 
    classifique o em uma das seguintes categorias
    Infantil A 5 a 7 anos
    Infantil B 8 a 11 anos
    Juvenil A 12 a 13 anos
    Juvenil B 14 a 17 anos
    Adultos = Maiores de 18 anos -->

<?php

    $idade = 776;

    if($idade >= 5 && $idade <= 7){
        echo "Infantil A";
    }elseif($idade >= 8 && $idade <= 11){
        echo "Infantil B";
    }elseif($idade >= 12 && $idade <= 13){
        echo "Juvenil A";
    }elseif($idade >= 14 && $idade <= 17){
        echo "Juvenil B";
    }elseif($idade >= 18){
        echo "Adulto";
    }else{
        echo "Entrada Inválida";
    }

?>