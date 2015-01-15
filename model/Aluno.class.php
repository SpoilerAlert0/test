<?php
    class Aluno
    {
        private $id;
        private $ra;
        private $nome;
        private $endereco;
        private $telefone;
        private $rg;
        private $cpf;
        
        public function __construct(){}

        public function getId()
        {
            return $this->id;
        }
        public function setId($id)
        {
            $this->id = $id;
        }
        public function getRa()
        {
            return $this->ra;
        }
         public function setRa($ra)
        {
            $this->ra = $ra;
        }
        public function getNome()
        {
            return $this->nome;
        }
        
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function getEndereco()
        {
            return $this->endereco;
        }
        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }
        public function getTelefone()
        {
            return $this->telefone;
        }
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }
        public function getRg()
        {
            return $this->rg;
        }
        public function setRg($rg)
        {
            $this->rg = $rg;
        }
        public function getCpf()
        {
            return $this->cpf;
        }
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }
    }
