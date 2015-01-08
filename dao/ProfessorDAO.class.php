<?php
    class ProfessorController
    {
         public function __construct()
        {

        } 
         public function salvar()
        {
            $query = "insert into professor (nome, preco) values ('alan', 100)";
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
