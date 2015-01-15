<?php
require_once'../../header.php'; 
require_once '../../controller/CoordenadorController.class.php';
$coordenador = array();
$coordenador = unserialize(base64_decode($_POST['select']));
?>
<table class="table table-striped">
  <tr><td>ID: <?= $coordenador['ID_COORDENADOR'] ?></td></tr>
  <tr><td>Nome: <?= $coordenador['NOME'] ?></td></tr>
</table>
<form method="GET" action="alterar.php">
	<button class="btn btn-primary" type="submit" name="update" value=<?= base64_encode(serialize($coordenador)) ?>>
		<span class="glyphicon glyphicon-edit"></span>
	</button>
	<a class="btn btn-primary" href="index.php">Voltar</a>
</form>
<?php require_once'../../footer.php'; ?>
