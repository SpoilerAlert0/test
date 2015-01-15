<?php
require_once '../../dao/DisciplinaDAO.class.php';
require_once '../../model/Disciplina.class.php';


    class DisciplinaController    
    {
        public function __construct(){}
         
        public function salvar($nome)
        {
            $object = new Disciplina();
            $instance = new DisciplinaDAO();
            $object->setNome($nome);
            $instance->salvar($object);
        }
        public function selecionar()
        {
            $instance = new DisciplinaDAO();
            $values = $instance->selecionar();
            return $values;
        }
        public function selecionar_id($id)
        {
            $instance = new DisciplinaDAO();
            return $value = $instance->selecionar_id($id);
            
        }
        public function alterar($id, $nome)
        {
            $object = new Disciplina();
            $instance = new DisciplinaDAO();
            $object->setId($id);
            $object->setNome($nome);
            $instance->alterar($object);
        }
        public function deletar($id)
        {
            $instance = new DisciplinaDAO();
            $instance->deletar($id);
        }
    }
