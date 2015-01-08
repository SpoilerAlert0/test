<?php
require_once '../../dao/AlunoDAO.class.php';
require_once '../../model/Aluno.class.php';


    class AlunoController    
    {
        public function __construct(){}
         
        public function salvar($nome, $endereco, $sexo, $idade)
        {
            $object = new Aluno();
            $instance = new AlunoDao();
            $object->setNome($nome);
            $object->setEndereco($endereco);
            $object->setSexo($sexo);
            $object->setIdade($idade);
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
        public function alterar()
        {
            $instance = new AlunoDao();
            $instance->alterar($object);
        }
        public function deletar($ra)
        {
            $instance = new AlunoDao();
            $instance->deletar($ra);
        }
    }
