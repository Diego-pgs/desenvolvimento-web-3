<?php

    class Cliente{
        
        private $id;
        private $conexao;
        private $nome;
        private $telefone;
        private $email;
        private $cpf;

        public function __construct($db){
            $this->conexao = $db;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function getCpf(){
            return $this->cpf;
        }

        public function create(){
            $query = "INSERT INTO cliente SET nome=:nome, telefone=:telefone, email=:email, cpf=:cpf";
            $stmt = $this->conexao->prepare($query);

            $stmt->bindParam(":nome", $this->nome);
            $stmt->bindParam(":telefone", $this->telefone);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":cpf", $this->cpf);

            if($stmt->execute()){  
                return true;
            }

            return false;
        }
    }


?>