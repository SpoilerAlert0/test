<?php
	require_once '../../controller/CoordenadorController.class.php';
	$instance = new CoordenadorController();
	$coordenador = array();
	$coordenador = unserialize(base64_decode($_GET['update']));
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
		$instance->alterar($coordenador['ID_COORDENADOR'], $_POST['nome']);
	 	?><script type="text/javascript">window.location.replace("index.php");</script><?php
	 }
	}	
?>	    

