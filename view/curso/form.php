<fieldset>

<!-- Form Name -->
<legend>Aluno</legend>

<div class="control-group">
  <label class="control-label" for="textinput">Nome:</label>
  <div class="controls">
    <input id="txtNome" name="nome" type="text"  class="input-xlarge" value=<?php if(isset($curso)){ echo $curso['NOME']; } ?> >
  </div>
</div>


<div class="control-group">
  <label class="control-label" for="textinput">Carga Horaria:</label>
  <div class="controls">
    <input id="txtCpf" name="cargaHoraria" type="text"  class="input-xlarge" value=<?php if(isset($curso)){ echo $curso['CARGAHORARIA']; } ?>>
  </div>
</div>
</fieldset>