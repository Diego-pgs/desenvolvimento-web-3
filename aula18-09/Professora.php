<?php
    require 'Pessoa.php';

    class Professora extends Pessoa{

        public function ensinar(){
            echo $this->getNome()." está ensinando.";
        }

        public function falar(){
            echo $this->getNome()." pediu silêncio! E ficou nervosa.";
        }

    }

    $professora1 = new Professora("Carol", 73, 1.78, "0567893");
    $professora1->falar();
    

?>