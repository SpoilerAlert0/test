<?php
require_once '../../infra/Connection.class.php';
require_once '../../model/Aluno.class.php';

    class AlunoDAO
    {
        public function __construct(){} 
        public function salvar($object)
        {            
           $nome =  $object->getNome();
           $endereco = $object->getEndereco();
           $sexo =  $object->getSexo();
           $idade =  $object->getIdade();
            try
            {
                $conexao = Connection::connect();
                $query = "insert into aluno (nome, endereco, sexo, idade) values ('{$nome}', '{$endereco}', '{$sexo}', '{$idade}')";
                mysqli_query($conexao, $query);
                mysqli_close($conexao);
            }
            catch(Exception $e)
            {
                echo $e;
            }
        }
        public  function selecionar()
        {
            try
            {
                $conexao = Connection::connect();
                $query = "select * from aluno";
                //$query = "select nome, endereco, sexo, idade from aluno";
                $a =  mysqli_query($conexao, $query);
                mysqli_close($conexao);
                return $a; 
            }
            catch(Exception $e)
            {
                echo $e;
            }
        }
        public  function selecionar_id($id)
        {
            try
            {
                $conexao = Connection::connect();
                $query = "select nome, endereco, sexo, idade from aluno where ra_aluno = '{$id}'";
                $a =  mysqli_query($conexao, $query);
                mysqli_close($conexao);
                return $a; 
            }
            catch(Exception $e)
            {
                echo $e;
            }
        }
        public function  alterar($ra)
        {
            $conexao = Connection::connect();            
            $query = "update aluno set nome='{$nome}', endereco ='{$endereco}', sexo='{$sexo}', idade='{$idade}' where ra_aluno = '{$ra}'";
            mysqli_query($conexao, $query);
            mysqli_close($conexao);
        }
        public function deletar($ra)
        {
            try
            {
                $conexao = Connection::connect();
                $query = "delete from aluno where ra_aluno='{$ra}'";
                mysqli_query($conexao, $query);
                mysqli_close($conexao);
            }
            catch(Exception $e)
            {
                echo $e;
            }
        }
    }
        function listaCategorias() 
        {
            $conexao = Connection::connect();
            $categorias = array();
            $query = "select * from categorias";
            $resultado = mysqli_query($conexao, $query);
            while($categoria = mysqli_fetch_assoc($resultado)) {
                array_push($categorias, $categoria);
            }
            return $categorias;
        } 
