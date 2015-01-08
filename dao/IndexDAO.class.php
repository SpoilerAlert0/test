<?php
include_once('/../infra/Connection.class.php');
    class IndexDAO
    {
        function __construct(){}

        function login($email, $senha)
        {
            $conexao = Connection::connect();
            $query = "select email, senha from usuario where email='{$email}' and senha='{$senha}'";
            $a = mysqli_query($conexao, $query);
            return $values =mysqli_fetch_assoc($a);
        }
    }                                                   