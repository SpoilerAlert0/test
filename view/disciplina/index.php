<?php require_once '../../header.php';
require_once '../../controller/DisciplinaController.class.php';
$b = new DisciplinaController();
?>
 <h1>
	<small>Disciplinas</small>
</h1>
<a class="pull-right btn btn-primary" href="/es/view/disciplina/salvar.php">
	<span class="glyphicon"></span>
	Adicionar
</a>
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th colspan="3"></th>
    </tr>
  </thead>
  <tbody>
  <?php
        $array = $b->selecionar();
        while($disciplinas = mysqli_fetch_assoc($array)) 
        { 
  ?>
      <tr>
        <td><?php echo $disciplinas['ID_DISCIPLINA']?></td>
        <td><?php echo $disciplinas['NOME']?></td>
        <td>
        <form method="POST" action="excluir.php">
            <button class="btn btn-primary pull-right" type="submit" name="delete" value=<?= $disciplinas['ID_DISCIPLINA'] ?> >
                <span class="glyphicon glyphicon-remove-sign"></span>
            </button>
        </form>
        <form method="GET" action="alterar.php">
            <button class="btn btn-primary pull-right" type="submit" name="update" value=<?= base64_encode(serialize($disciplinas)) ?>>
              <span class="glyphicon glyphicon-edit"></span>
            </button>
        </form>
        <form method="POST" action="selecionar.php">
            <button class="btn btn-primary pull-right" type="submit" name="select" value=<?= base64_encode(serialize($disciplinas)) ?>>
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