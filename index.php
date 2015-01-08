<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/es/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Signin</title>

    <link href="/es/assets/css/signin.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
  <body>
    <div class="container">
      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address">
		    <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br><center>
        <div class=""><a href="/es/cadastro.php">cadastre-se</a></div>
        <br></center>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
  </body>
</html>

<?php
include_once '/controller/IndexController.class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  $instance = new IndexController();
  $value = $instance->login($_POST['email'], $_POST['senha']);
  if((array_shift($value)==$_POST['email']) && (array_shift($value)==$_POST['senha']))
    {
      setcookie("logado", $_POST['email'], time() + 600);
      header('Location: /es/menu.php?login=1');
    }
  else
    {header('Location: /es/error.php');}
}