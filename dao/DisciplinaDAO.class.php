<?php
require_once '../../infra/Connection.class.php';
require_once '../../model/Curso.class.php';

    class DisciplinaDAO
    {
        public function __construct(){} 
        public function salvar($object)
        {            
            $nome = $object->getNome();
            try
            {
                $conexao = Connection::connect();
                $query = "insert into disciplina (nome) values ('{$nome}')";
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
                $query = "select * from disciplina";
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
                $query = "select id, nome from disciplina where id_disciplina = '{$id}'";
                $a =  mysqli_query($conexao, $query);
                mysqli_close($conexao);
                return $a; 
            }
            catch(Exception $e)
            {
                echo $e;
            }
        }
        public function  alterar($object)
        {
            $id = $object->getId();
            $nome = $object->getNome();
            $conexao = Connection::connect();            
            $query = "update disciplina set nome='{$nome}' where id_disciplina = '{$id}'";
            mysqli_query($conexao, $query);
            mysqli_close($conexao);
        }
        public function deletar($id)
        {
            try
            {
                $conexao = Connection::connect();
                $query = "delete from disciplina where id_curso='{$id}'";
                mysqli_query($conexao, $query);
                mysqli_close($conexao);
            }
            catch(Exception $e)
            {
                echo $e;
            }
        }
    }