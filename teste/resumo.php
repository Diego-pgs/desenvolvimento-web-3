<?php

    /* 
    $nome = "Diego";
    $idade = 22;
    $altura = 1.77;

    echo "Olá mundo! Eu sou $nome, tenho $idade anos e $altura de altura.";
    echo 'Ola mundo! Eu sou '.$nome.' tenho '.$idade.' anos e '.$altura.' de altura.'; 
    */

    // $a = "13";
    // $b = 19;

    // var_dump($a);
    // var_dump($b);

    $nomes = array("Carol","Percival","Luiz","Adrian");
    
    var_dump($nomes);
    
    echo "<br><br>";
    for($i=0; $i<=2; $i++){
        echo $nomes[$i];
        echo "<br>";
    }

    $funcionarios = array("Nome" => "Alex","idade"=> 21,"Salário"=>1285.27,"Ativo"=>true);
        // array("Nome" => "Emerson","idade"=> 35,"Salário"=>3885.27,"Ativo"=>false),
        // array("Nome" => "Osvaldo","idade"=> 54,"Salário"=>5285.27,"Ativo"=>true),
    
    echo "<br><br>";
    foreach($funcionarios as $chave => $valor){
        echo "$chave: $valor";
        echo "<br>";
    }

?>