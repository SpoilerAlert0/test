<?php
	require_once '../../controller/AlunoController.class.php';
	$instance = new AlunoController();
	$aluno = array();
	$aluno = unserialize(base64_decode($_GET['update']));
	require_once'../../header.php'; 
?>

<form class="form-horizontal" method="POST">
	<?php require_once 'form.php'; ?>
	<div class="control-group">
	  <div class="controls"><br>
	    <button class="btn btn-primary" name="submit" value="submit">Alterar</button>
	    <a class="btn btn-primary" href="index.php">Voltar</a>
	  </div>
	</div>
</form>

<?php
	require('../../footer.php');
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	 if(isset($_POST['submit']))
	 {
		$instance->alterar($aluno['ID_ALUNO'], $_POST['nome'], $_POST['endereco'], $_POST['telefone'], $_POST['rg'], $_POST['cpf'], $_POST['ra']);
	 	?><script type="text/javascript">window.location.replace("index.php");</script><?php
	 }
	}	
?>	    

