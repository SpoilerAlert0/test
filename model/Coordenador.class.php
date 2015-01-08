<?php

    class Coordenador
    {
    	 private $nome;
    	 private $curso;
    	 private $horario;
    	  
         public function __construct(){} 
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
         	
         }
    }


