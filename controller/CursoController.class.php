<?php
require_once '../../dao/CursoDAO.class.php';
require_once '../../model/Curso.class.php';


    class CursoController    
    {
        public function __construct(){}
         
        public function salvar($nome, $cargaHoraria)
        {
            $object = new Curso();
            $instance = new CursoDAO();
            $object->setNome($nome);
            $object->setCargaHoraria($cargaHoraria);
            $instance->salvar($object);
        }
        public function selecionar()
        {
            $instance = new CursoDAO();
            $values = $instance->selecionar();
            return $values;
        }
        public function selecionar_id($id)
        {
            $instance = new CursoDAO();
            return $value = $instance->selecionar_id($id);
            
        }
        public function alterar($id, $nome, $cargaHoraria)
        {
            $object = new Curso();
            $instance = new CursoDAO();
            $object->setId($id);
            $object->setNome($nome);
            $object->setCargaHoraria($cargaHoraria);
            $instance->alterar($object);
        }
        public function deletar($id)
        {
            $instance = new CursoDAO();
            $instance->deletar($id);
        }
    }
