<?php
require_once'../../header.php'; 
require_once '../../controller/AlunoController.class.php';
$aluno = array();
$aluno = unserialize(base64_decode($_POST['select']));
?>
<table class="table table-striped">
  <tr><td>ID: <?= $aluno['ID_ALUNO'] ?></td></tr>
  <tr><td>Nome: <?= $aluno['NOME'] ?></td></tr>
  <tr><td>Endereço: <?= $aluno['ENDERECO'] ?></td></tr>
  <tr><td>Telefone: <?= $aluno['TELEFONE'] ?></td></tr>
  <tr><td>Rg: <?= $aluno['RG'] ?></td></tr>
  <tr><td>CPF: <?= $aluno['CPF'] ?></td></tr>
  <tr><td>RA: <?= $aluno['RA'] ?></td></tr>
</table>
<form method="GET" action="alterar.php">
	<button class="btn btn-primary" type="submit" name="update" value=<?= base64_encode(serialize($aluno)) ?>>
		<span class="glyphicon glyphicon-edit"></span>
	</button>
	<a class="btn btn-primary" href="index.php">Voltar</a>
</form>
<?php require_once'../../footer.php'; ?>
