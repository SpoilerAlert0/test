<?php require('../../header.php');
require_once '../../controller/CursoController.class.php';
$b = new CursoController();
?>
 <h1>
  <span>
      <p class="text-center alert alert-danger">
        Curso excluido com sucesso!!
      </p>    
  </span>
</h1>
<?php require('../../footer.php'); ?>
<script type="text/javascript">window.setInterval(function() {window.location.replace("index.php");}, 700);
</script>
<?php 
 $b->deletar($_POST['delete']);
?>