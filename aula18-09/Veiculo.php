<?php

    class Veiculo{
        public $cor;
        public $placa;
        public $combustivel;

        public function frear(){
            echo $this->placa." freou! <br>";
        }

        public function andar(){
            echo $this->placa." andou! <br>";
        }
    }

    $veiculo1 = new Veiculo();
    $veiculo1->cor="Vermelho";
    $veiculo1->placa="AXN5412";
    $veiculo1->combustivel="Gasosa";

    $veiculo1->frear();
    $veiculo1->andar();

    echo "Veiculo Cor: ".$veiculo1->cor."<br> Placa: ".$veiculo1->placa."<br> Combustivel: ".$veiculo1->combustivel."<br>";

?>