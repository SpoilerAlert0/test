<!DOCTYPE html>
<html>
		<head>
			<link href="/es/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />	
	  		<link href="/es/assets/css/dashboard.css" rel="stylesheet" type="text/css" media="screen" />	
	  	    <link href="/es/assets/css/signin.css" rel="stylesheet" type="text/css" media="screen" />
			<title>Cadastro de usuarios</title>
		</head>
		<body>
			<form class="form-horizontal" method="POST" action="">
				<fieldset>
					<!-- Form Name -->
					<legend>Aluno</legend>
					<div class="container">
						<!-- Text input-->
						<div class="control-group">
						  <label class="control-label" for="textinput">Nome:</label>
						  <div class="controls">
						    <input id="textinput" name="nome" type="text"   class="input-xlarge">
						  </div>
						</div>

						<!-- Text input-->
						<div class="control-group">
						  <label class="control-label" for="textinput">Endereco</label>
						  <div class="controls">
						    <input id="textinput" name="endereco" type="text"   class="input-xlarge">
						  </div>
						</div>

						<!-- Text input-->
						<div class="control-group">
						  <label class="control-label" for="textinput">Telefone:</label>
						  <div class="controls">
						    <input id="textinput" name="telefone" type="text"   class="input-xlarge">
						  </div>
						</div>

						<!-- Text input-->
						<div class="control-group">
						  <label class="control-label" for="textinput">Rede Social:</label>
						  <div class="controls">
						    <input id="textinput" name="socialweb" type="text"   class="input-xlarge">
						  </div>
						</div>

						<!-- Text input-->
						<div class="control-group">
						  <label class="control-label" for="textinput">email:</label>
						  <div class="controls">
						    <input id="textinput" name="email" type="text"   class="input-xlarge">
						  </div>
						</div>

						<!-- Text input-->
						<div class="control-group">
						  <label class="control-label" for="textinput">senha:</label>
						  <div class="controls">
						    <input id="textinput" name="senha" type="text"   class="input-xlarge">
						  </div>
						</div>

						<!-- Text input-->
						<div class="control-group">
						  <label class="control-label" for="textinput">Repita o e-mail:</label>
						  <div class="controls">
						    <input id="textinput" name="validacao" type="text"   class="input-xlarge">
						  </div>
						</div>

						<!-- Button (Double) -->
						<div class="control-group">
						  <div class="controls"><br>
						    <button id="button1id" class="btn btn-primary" name="salvar" value="submit">Salvar</button>
						  	<a href='index.php' class='btn btn-primary'>Voltar</a>
						  </div>
						</div>
					</div>
				</fieldset>
			</form>
		</body>
	</div>
</html>