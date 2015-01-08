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
      <th>Endereço</th>
      <th>Sexo</th>
      <th>Idade</th>
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
        <td><?php echo $alunos['nome']?></td>
        <td><?php echo $alunos['endereco']?></td>
        <td><?php echo $alunos['sexo']?></td>
        <td><?php echo $alunos['idade']?></td>
        <td><?php echo $alunos['ra_aluno']?></td>
        <td>
        <form method="POST" action="">
            <button class="btn btn-primary pull-right" type="submit" name="delete" value=<?= $alunos['ra_aluno'] ?> >
                <span class="glyphicon glyphicon-remove-sign"></span>
            </button>
        </form>
        <form method="GET" action="">
            <button class="btn btn-primary pull-right" type="submit" name="edit" >
    			     <span class="glyphicon glyphicon-edit"></span>
    	      </button>
        </form>
        <form method="GET" action="selecionar.php">
            <button class="btn btn-primary pull-right" type="submit" name="select" value=<?= $alunos['ra_aluno'] ?>>
               <span class= "glyphicon glyphicon-search"></span>
            </button>
        </form>  
            <?php  
              if($_SERVER['REQUEST_METHOD'] == 'POST')
              { 
                  if(isset($_POST['delete']))
                  {
                    $b->deletar($_POST['delete']);
            ?>
                  <script type="text/javascript">
                    window.location.replace("index.php")
                  </script>
            <?php
                  }
              }
        }
            ?>
        </form> 
	     	</td>
      </tr>
  </tbody>
</table>
<br>
<?php require_once '../../footer.php'; ?>