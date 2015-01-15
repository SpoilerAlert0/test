<?php require_once '../../header.php';
require_once '../../controller/AlunoController.class.php';
$b = new AlunoController();
?>
 <h1>
	<small>Alunos</small>
</h1>
<a class="pull-right btn btn-primary" href="/es/view/aluno/salvar.php">
	<span class="glyphicon"></span>
	Adicionar
</a>
<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Endereco</th>
      <th>Telefone</th>
      <th colspan="3"></th>
    </tr>
  </thead>
  <tbody>
  <?php
        $array = $b->selecionar();
        while($alunos = mysqli_fetch_assoc($array)) 
        { 
  ?>
      <tr>
        <td><?php echo $alunos['NOME']?></td>
        <td><?php echo $alunos['ENDERECO']?></td>
        <td><?php echo $alunos['TELEFONE']?></td>
        <td>
        <form method="POST" action="excluir.php">
            <button class="btn btn-primary pull-right" type="submit" name="delete" value=<?= $alunos['ID_ALUNO'] ?> >
                <span class="glyphicon glyphicon-remove-sign"></span>
            </button>
        </form>
        <form method="GET" action="alterar.php">
            <button class="btn btn-primary pull-right" type="submit" name="update" value=<?= base64_encode(serialize($alunos)) ?>>
              <span class="glyphicon glyphicon-edit"></span>
            </button>
        </form>
        <form method="POST" action="selecionar.php">
            <button class="btn btn-primary pull-right" type="submit" name="select" value=<?= base64_encode(serialize($alunos)) ?>>
               <span class= "glyphicon glyphicon-search"></span>
            </button>
        </form> 
        <?php } ?>
	     	</td>
      </tr>
  </tbody>
</table>
<br>
<?php require_once '../../footer.php'; ?>