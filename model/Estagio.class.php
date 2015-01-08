<?php

    class Estagio 
    {
    	 private $idEstagio;
    	 private $nome;
		   private $descricao;
		   private $telefone;
		   private $email;
		   private $horaEntrada;
		   private $horaSaida;
		   private $diasPorSemana;
		   private $duracao;
		   private $valor;

       public function __construct(){}

       public function getIdEstagio()
       {
         return $this->idEstagio;
       }
       public function setIdEstagio($idEstagio)
       {
        	$this->idEstagio = $idEstagio;
       }
       public function getNome()
       {
        	return $this->nome;
       }
       public function setNome($nome)
       {
       	$this->nome = $nome;
       }
       public function getDescricao()
       {
        	return $this->descricao;
       }
       public function setDescricao($descricao)
       {
        	$this->descricao = $descricao;
       }	
       public function getTelefone()
       {
        	return $this->telefone;
       }
       public function setTelefone($telefone)
       {
        	$this->telefone = $telefone;
       }
       public function getEmail()
       {
       	return $this->email;
       }
       public function setEmail($email)
       {
        	$this->email = $email;
       }
       public function getHoraEntrada()
       {
       	return $this->horaEntrada;
       }
       public function setHoraEntrada($horaEntrada)
       {
        	$this->horaEntrada = $horaEntrada;
       }
       public function getHoraSaida()
       {
        	return $this->horaSaida;
       }
       public function setHoraSaida($horaSaida)
       {
        	$this->horaSaida = $horaSaida;
       }
       public function getDiasPorSemana()
       {
       	return $this->diasPorSemana;
       }
       public function setDiasPorSemana($diasPorSemana)
       {
        	$this->diasPorSemana = $diasPorSemana;
       }
       public function getDuracao()
       {
        	return $this->duracao;
       }
       public function setDuracao($duracao)
       {
        	$this->duracao = $duracao;
       }
       public function getValor()
       {
        	return $this->valor;
       }
       public function setValor($valor)
       {
        	$this->valor = $valor;
       }
    }
