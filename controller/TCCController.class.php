<?php
require_once '../../dao/AlunoDAO.class.php';
require_once '../../model/Aluno.class.php';


    class AlunoController    
    {
        public function __construct(){}
         
        public function salvar($nome, $endereco, $telefone, $rg, $cpf, $ra)
        {
            $object = new Aluno();
            $instance = new AlunoDao();
            $object->setEndereco($endereco);
            $object->setTelefone($telefone);
            $object->setRg($rg);
            $object->setCpf($cpf);
            $object->setNome($nome);
            $object->setRa($ra);
            $instance->salvar($object);
        }
        public function selecionar()
        {
            $instance = new AlunoDao();
            $values = $instance->selecionar();
            return $values;
        }
        public function selecionar_id($id)
        {
            $instance = new AlunoDao();
            return $value = $instance->selecionar_id($id);
            
        }
        public function alterar($id, $nome, $endereco, $telefone, $rg, $cpf, $ra)
        {
            $object = new Aluno();
            $instance = new AlunoDao();
            $object->setId($id);
            $object->setNome($nome);
            $object->setEndereco($endereco);
            $object->setTelefone($telefone);
            $object->setRg($rg);
            $object->setCpf($cpf);
            $object->setRa($ra);
            $instance->alterar($object);
        }
        public function deletar($ra)
        {
            $instance = new AlunoDao();
            $instance->deletar($ra);
        }
    }
