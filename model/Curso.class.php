<?php

    class Curso
    {
    	private $nome;
    	private $area;
    	private $coordenador;

        public function __construct(){}  

        public function getNome()
        {
        	return $this->nome;
        }
        public function setNome($nome)
        {
        	$this->nome = $nome;
        }
        public function getArea()
        {
        	return $this->area;
        }
        public function setArea($area)
        {
        	$this->area = $area;
        }
        public function getCoordenador()
        {
        	return $this->coordenador;
        }
        public function setCoordenador($coordenador)
        {
        	$this->coordenador = $coordenador;
        }

    }
