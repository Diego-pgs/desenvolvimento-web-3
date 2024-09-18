<!-- Elabore um algoritmo que escreve os números ímpares entre 100 e 200 -->

<?php
    
    $numero=100;

    for($i = 0; $i <= 100; $i++){
        if($numero % 2 != 0){
            echo "$numero ";
        }
        $numero++;
    }

?>