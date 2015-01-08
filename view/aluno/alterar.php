<?php require('../../header.php'); ?>

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
	  $instance->alterar($_POST['nome'], $_POST['endereco'], $_POST['sexo'], $_POST['idade']);
?>	  <script type="text/javascript">window.location.replace("index.php");</script>
<?php
  }
}
?>