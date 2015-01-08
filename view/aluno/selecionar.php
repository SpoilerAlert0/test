<?php
require_once'../../header.php'; 
require_once '../../controller/AlunoController.class.php';



$id = $_GET['select'];
$variable = new AlunoController();
$z = $variable->selecionar_id($id);
$aluno = mysqli_fetch_assoc($z);
  
  	$t = array_shift($aluno);
  	$r = array_shift($aluno);
  	$e = array_shift($aluno);
  	$p = array_shift($aluno);
?>

    <label class="form table container"><?= $t ?></label><br>
    <label class="form table container"><?= $r ?></label><br>
    <label class="form table container"><?= $e ?></label><br>
    <label class="form table container"><?= $p ?></label><br>




<?php require_once'../../footer.php'; ?>
