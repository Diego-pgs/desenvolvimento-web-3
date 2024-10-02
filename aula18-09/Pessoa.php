<?php

    class Pessoa{
        private $nome;
        private $peso;
        private $altura;
        private $cpf;

        public function __construct($nome, $peso, $altura, $cpf){
            $this->nome = $nome;
            $this->peso = $peso;
            $this->altura = $altura;
            $this->cpf = $cpf;
        }

        public function falar(){
            echo $this->nome." falou <br>";
        }
        public function andar(){
            echo $this->nome." andou <br>";
        }

        public function getNome(){
            return $this->nome;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function getCpf(){
            return $this->cpf;
        }

        public function setNome($nome){
            if($nome=="Sandra"){
                echo "Não é possivel alterar o nome para Sandra. Escolha outro.";
            }else{
                $this->nome = $nome;
            }
        }
        public function setPeso($peso){
            $this->peso = $peso;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
    }

?>