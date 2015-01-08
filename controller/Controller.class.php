<?php

class Controller
{
	public function __construct(){}

	public static function view($class)
	{
		 if (file_exists($_SERVER['DOCUMENT_ROOT'].'/es/view/'.$class.'.php')) 
		 {
            return require_once($_SERVER['DOCUMENT_ROOT'].'/es/view/'.$class.'.php');
         }
         else
         {
			throw new Exception("a rota não existe");
		 }
	}

	public static function controller($class)
	{
		 if (file_exists($_SERVER['DOCUMENT_ROOT'].'/es/controller/'.$class.'.php')) 
		 {
            return require_once($_SERVER['DOCUMENT_ROOT'].'/es/controller/'.$class.'.php');
         }
         else
         {
			throw new Exception("a rota não existe");
     	 }
	}

	public static function model($class)
	{
		if (file_exists($_SERVER['DOCUMENT_ROOT'].'/es/model/'.$class.'class.php')) 
		{
	        return require_once($_SERVER['DOCUMENT_ROOT'].'/es/model/'.$class.'class.php');
		}
		else
		{
			throw new Exception("a rota não existe");
		}
	}

	public static function dao($class)
	{
		 if (file_exists($_SERVER['DOCUMENT_ROOT'].'/es/DAO/'.$class.'.php')) 
		 {
            return require_once($_SERVER['DOCUMENT_ROOT'].'/es/DAO/'.$class.'.php');
            
         }
         else
         {
			throw new Exception("a rota não existe");
     	 }
	}
}