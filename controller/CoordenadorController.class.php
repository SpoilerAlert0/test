<?php
require_once '../../dao/CoordenadorDAO.class.php';
require_once '../../model/Coordenador.class.php';


    class CoordenadorController    
    {
        public function __construct(){}
         
        public function salvar($nome)
        {
            $object = new Coordenador();
            $instance = new CoordenadorDAO();
            $object->setNome($nome);
            $instance->salvar($object);
        }
        public function selecionar()
        {
            $instance = new CoordenadorDAO();
            $values = $instance->selecionar();
            return $values;
        }
        public function selecionar_id($id)
        {
            $instance = new CoordenadorDAO();
            return $value = $instance->selecionar_id($id);
            
        }
        public function alterar($id, $nome)
        {
            $object = new Coordenador();
            $instance = new CoordenadorDAO();
            $object->setId($id);
            $object->setNome($nome);
            $instance->alterar($object);
        }
        public function deletar($id)
        {
            $instance = new CoordenadorDAO();
            $instance->deletar($id);
        }
    }
