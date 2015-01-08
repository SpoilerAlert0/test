<?php

    class Aluno
    {
        private $ra;
        private $nome;
        private $curso;
        private $endereco;
        private $telefone;
        private $rg;
        private $cpf;

        
        public function __construct(){}
        
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
        public function getCurso()
        {
            return $this->curso;
        }
        public function setCurso($curso)
        {
            $this->curso = $curso;
        }

        public function getEndereco()
        {
            return $this->endereco;
        }
        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }
        public function getSexo()
        {
            return $this->sexo;
        }
        public function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }

        public function getIdade()
        {
            return $this->idade;
        }
        public function setIdade($idade)
        {
            $this->idade = $idade;
        }
    }
