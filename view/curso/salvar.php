<?php 
require_once('../../header.php');
require_once '../../controller/CursoController.class.php';
?>
<form class="form-horizontal" method="POST" action="">
<?php include('form.php'); ?>
<!-- Button (Double) -->
<div class="control-group">
  <div class="controls"><br>
    <button id="button1id" class="btn btn-primary" name="submit" value="submit">Salvar</button>
    <a class="btn btn-primary" href="index.php">Voltar</a>
  </div>
</div>
</form>
<?php require('../../footer.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  $instance = new CursoController();
  if(isset($_POST['submit']))
  {
	  $instance->salvar($_POST['nome'],$_POST['cargaHoraria']);
?>	  <script type="text/javascript">window.location.replace("index.php");</script>
<?php
  }
}
?>
