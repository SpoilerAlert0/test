<?php require('../../header.php');
require_once '../../controller/CoordenadorController.class.php';
$deletar = new CoordenadorController();
?>
 <h1>
  <span>
      <p class="text-center alert alert-danger">
        Coordenador excluido com sucesso!!
      </p>    
  </span>
</h1>
<?php require('../../footer.php'); ?>
<script type="text/javascript">window.setInterval(function() {window.location.replace("index.php");}, 700);
</script>
<?php 
 $deletar->deletar($_POST['delete']);
?>