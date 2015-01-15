<?php

    class Coordenador
    {
         private $id;
    	 private $nome;
    	 #private $curso;
    	 #private $horario;
    	  
         public function __construct(){} 
          public function getId()
         {
            return $this->id;
         }
         public function setId($id)
         {
            $this->id = $id;
         }
         public function getNome()
         {
         	return $this->nome;
         }
         public function setNome($nome)
         {
         	$this->nome = $nome;
         }
         /*public function getCurso()
         {
         	return $this->curso;
         }
         public function setCurso($curso)
         {
         	
         }*/
    }


