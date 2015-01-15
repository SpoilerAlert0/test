<?php
require_once '../../infra/Connection.class.php';
require_once '../../model/Aluno.class.php';

    class AlunoDAO
    {
        public function __construct(){} 
        public function salvar($object)
        {            
            $nome = $object->getNome();
            $endereco = $object->getEndereco();
            $telefone = $object->getTelefone();
            $rg = $object->getRg();
            $cpf = $object->getCpf();
            $ra = $object->getRa();
            try
            {
                $conexao = Connection::connect();
                $query = "insert into aluno (endereco, telefone, rg, cpf, nome, ra) values ('{$endereco}', '{$telefone}', '{$rg}', '{$cpf}', '{$nome}', '{$ra}')";
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
                $query = "select nome, endereco, telefone, rg, cpf from aluno where id_aluno = '{$id}'";
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
            $endereco = $object->getEndereco();
            $telefone = $object->getTelefone();
            $rg = $object->getRg();
            $cpf = $object->getCpf();
            $ra = $object->getRa();
            $conexao = Connection::connect();            
            $query = "update aluno set nome='{$nome}', endereco='{$endereco}', telefone='{$telefone}', rg='{$rg}', cpf='{$cpf}', ra='{$ra}' where id_aluno = '{$id}'";
            mysqli_query($conexao, $query);
            mysqli_close($conexao);
        }
        public function deletar($id)
        {
            try
            {
                $conexao = Connection::connect();
                $query = "delete from aluno where id_aluno='{$id}'";
                mysqli_query($conexao, $query);
                mysqli_close($conexao);
            }
            catch(Exception $e)
            {
                echo $e;
            }
        }
    }