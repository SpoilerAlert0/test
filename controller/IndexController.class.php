<?php
include_once('/../dao/IndexDAO.class.php');
//a partir do php 4 não é mais possivel pegar parametros atráves de métodos, sendo assim os parametros são globais e estão presentes no código
//implicitamente
    class IndexController
    {
    	
     public function __construct(){}
        
       public function login($email, $senha)
        {
                $dao = new IndexDAO();
                return $dao->login($email, $senha);
        }
    }
    