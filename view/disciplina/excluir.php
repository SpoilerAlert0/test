<?php require('../../header.php');
require_once '../../controller/DisciplinaController.class.php';
$deletar = new DisciplinaController();
?>
 <h1>
  <span>
      <p class="text-center alert alert-danger">
        Disciplina excluida com sucesso!!
      </p>    
  </span>
</h1>
<?php require('../../footer.php'); ?>
<script type="text/javascript">window.setInterval(function() {window.location.replace("index.php");}, 700);
</script>
<?php 
 $deletar->deletar($_POST['delete']);
?>