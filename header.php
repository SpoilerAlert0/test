<!DOCTYPE html>
 <html lang="pt_BR"> 
	<head>
	 <meta charset="utf-8">
	  <title>Signin </title>  
	  <head>
	  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>escola</title>

    <!-- Bootstrap core CSS -->
		  <link href="/es/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />	
  		<link href="/es/assets/css/dashboard.css" rel="stylesheet" type="text/css" media="screen" />	
  		
         
  		<script type="text/javascript" src="/es/assets/js/ie10-viewport-bug-workaround.js"/></script>
  		<script type="text/javascript" src="/es/assets/js/ie-emulation-modes-warning.js"/></script>
  		
	  </head>
<?php if(isset($_COOKIE["logado"])) { ?>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../menu.php">Escola</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="/es/index.php">sair</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
  <div class="container-fluid">
      <div class="row-fluid">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar lead">
            <li class="active"><a>Menu</a></li>
            <li><a href="/es/view/aluno/index.php">Aluno</a></li>
            <li><a href="/es/view/coordenador/index.php">Coordenador</a></li>
            <li><a href="/es/view/curso/index.php">Curso</a></li>
            <li><a href="/es/view/disciplina/index.php">Disciplina</a></li>
            <li><a href="/es/view/estagio/salvar.php">Estágio</a></li>
            <li><a href="/es/view/monitor/index.php">Monitor</a></li>
            <li><a href="/es/view/professor/index.php">Professor</a></li>
            <li><a href="/es/view/sala/index.php"> Sala</a></li>
            <li><a href="/es/view/tcc/index.php">TCC</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
        <?php } 
        else
        {
          ?>
          <h1>
            <span>
                <p class="text-center alert alert-danger">
                  Sua sessão foi expirada.
                </p>    
            </span>
          </h1>
          </p>
          <?php
           die();
        }
        ?>