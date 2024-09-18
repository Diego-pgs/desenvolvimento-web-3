<!--Elabore um programa que leia as variáveis C e N, 
    respectivamente código e número de horas trabalhadas de um operário 
    E calcule o salário sabendo se que ele ganha R$ 10,00 por hora.
    Quando o número de horas exceder a 50 calcule o excesso de pagamento armazenando o na variável E, 
    caso contrário zerar tal variável A hora excedente de trabalho vale R$20,00. 
    No final do processamento imprimir o salário total e o salário excedente -->

<?php

    $codigo = 123;
    $numHorasTrab = 10;

    $salarioHora = 10.00;
    $salarioHoraExcedente = 20.00;
    $horasExcedente = 50;

    if($numHorasTrab > $horasExcedente){
        $horasExcedente = $numHorasTrab - $horasExcedente;
        $salarioNormal = $horasExcedente * $salarioHora;
        $salarioExcedente = $horasExcedente * $salarioHoraExcedente;
    }else{
        $horasExcedente = 0;
        $salarioNormal = $numHorasTrab * $salarioHora;
        $salarioExcedente = 0;
    }

    $salarioTotal = $salarioNormal + $salarioExcedente;

    echo "Codigo: $codigo <br>";
    echo "Numero de horas trabalhadas: $numHorasTrab <br>";
    echo "Salario Total: R$ $salarioTotal <br>";
    echo "Salario Excedente: $salarioExcedente <br>";

?>