<?php
    class Connection
    {
        private  function __construct(){}
        public static function connect()
        {  
           $host="localhost";
           $login="root";
           $senha="";
           $database="es";
           return mysqli_connect($host, $login, $senha, $database);
        }
    }
