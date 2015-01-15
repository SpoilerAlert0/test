<?php
require_once'../../header.php'; 
require_once '../../controller/CursoController.class.php';
$curso = array();
$curso = unserialize(base64_decode($_POST['select']));
?>
<table class="table table-striped">
  <tr><td>ID: <?= $curso['ID_CURSO'] ?></td></tr>
  <tr><td>Nome: <?= $curso['NOME'] ?></td></tr>
  <tr><td>Carga Horaria: <?= $curso['CARGAHORARIA'] ?></td></tr>
</table>
<form method="GET" action="alterar.php">
	<button class="btn btn-primary" type="submit" name="update" value=<?= base64_encode(serialize($curso)) ?>>
		<span class="glyphicon glyphicon-edit"></span>
	</button>
	<a class="btn btn-primary" href="index.php">Voltar</a>
</form>
<?php require_once'../../footer.php'; ?>
