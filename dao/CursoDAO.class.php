<?php

    class CursoController
    {
        public function __construct()
        {

        }  
         public function salvar()
        {
            $query = "insert into curso (nome, preco) values ('alan', 100)";
            $conexao = mysqli_connect('localhost', 'root', '', 'es');
            mysqli_query($conexao, $query);
            mysqli_close($conexao);
        }
        public function selecionar()
        {
            
        }
        public function alterar()
        {
            
        }
        public function deletar()
        {
        	
        }
        
    }
