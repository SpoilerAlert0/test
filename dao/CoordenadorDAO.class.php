<?php
require_once '../../infra/Connection.class.php';
require_once '../../model/Aluno.class.php';

    class CoordenadorDAO
    {
        public function __construct(){} 
        public function salvar($object)
        {            
            $nome = $object->getNome();
            try
            {
                $conexao = Connection::connect();
                $query = "insert into coordenador (nome) values ('{$nome}')";
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
                $query = "select * from coordenador";
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
                $query = "select nome from coordenador where id_coordenador = '{$id}'";
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
            $query = "update coordenador set nome='{$nome}' where id_coordenador = '{$id}'";
            mysqli_query($conexao, $query);
            mysqli_close($conexao);
        }
        public function deletar($id)
        {
            try
            {
                $conexao = Connection::connect();
                $query = "delete from coordenador where id_coordenador='{$id}'";
                mysqli_query($conexao, $query);
                mysqli_close($conexao);
            }
            catch(Exception $e)
            {
                echo $e;
            }
        }
    }