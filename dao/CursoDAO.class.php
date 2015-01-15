<?php
require_once '../../infra/Connection.class.php';
require_once '../../model/Curso.class.php';

    class CursoDAO
    {
        public function __construct(){} 
        public function salvar($object)
        {            
            $nome = $object->getNome();
            $cargaHoraria = $object->getCargaHoraria();

            try
            {
                $conexao = Connection::connect();
                $query = "insert into curso (nome, cargahoraria) values ('{$nome}', '{$cargaHoraria}')";
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
                $query = "select * from curso";
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
                $query = "select nome from curso where id_curso = '{$id}'";
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
            $cargaHoraria = $object->getCargaHoraria();
            $conexao = Connection::connect();            
            $query = "update curso set nome='{$nome}', cargahoraria='{$cargaHoraria}' where id_curso = '{$id}'";
            mysqli_query($conexao, $query);
            mysqli_close($conexao);
        }
        public function deletar($id)
        {
            try
            {
                $conexao = Connection::connect();
                $query = "delete from curso where id_curso='{$id}'";
                mysqli_query($conexao, $query);
                mysqli_close($conexao);
            }
            catch(Exception $e)
            {
                echo $e;
            }
        }
    }