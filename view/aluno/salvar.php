<?php require_once('../../header.php');
require_once '../../controller/AlunoController.class.php';
?>

<form class="form-horizontal" method="POST" action="">

<?php include('form.php'); ?>

</form>
<?php require('../../footer.php'); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  $instance = new AlunoController();
  if(isset($_POST['submit']))
  {
	  $instance->salvar($_POST['nome'], $_POST['endereco'], $_POST['sexo'], $_POST['idade']);
?>	  <script type="text/javascript">window.location.replace("index.php");</script>
<?php
  }
}
?>