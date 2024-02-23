<?php
    class cadastro
    {
 
        private $nome;
        private $nivel;
        private $duracao;
        private $valortotal;
        private $desscricao;
 
        public function __construct(){}
 
        public function create($_nome, $_nivel, $_duracao,$_valortotal,$_descricao,)
        {
            $this->nome = $_nome;
            $this->nivel = $_nivel;
            $this->duracao = $_duracao;
            $this->valortotal = $_valortotal;
            $this->descricao = $_descricao;
        }
        
        public function getnome()
        {
            return $this->nome;
        }
 
        public function setnome($_nome)
        {
            $this->nome = $_nome;
        }
 
        
        public function getnivel()
        {
            return $this->nivel;
        }
 
        public function setnivel($_nivel)
        {
            $this->nivel = $_nivel;
        }

        public function getduracao()
        {
            return $this->duracao;
        }
 
        public function setduracao($_duracao)
        {
            $this->duracao = $_duracao;
        }
 
        public function getvalortotal()
        {
            return $this->valortotal;
        }
 
        public function setvalortotal($_valortotal)
        {
            $this->valortotal = $_valortotal;
        }

        public function getdescricao()
        {
            return $this->descricao;
        }
 
        public function setdescricao($_descricao)
        {
            $this->descricao = $_descricao;
        }
 
        public function cadastro()
        {
            include("assets/db/conn.php");
            $sql = "CALL picurso(:nome, :nivel, :duracao, :valortotal, :descricao)";
 
            $data = [
                'nome' => $this->nome,
                'nível' => $this->nivel,
                'duração' => $this->duracao,
                'valortotal' => $this->valortotal,
                'descrição' => $this->descricao,
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($cadastro);
 
            return true;
        
        
        }
       
        public function listarcurso()
        {
            include("assets/db/conn.php");

            $sql = "CALL psListarcurso('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }
    }

?>