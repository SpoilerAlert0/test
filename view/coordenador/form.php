<fieldset>

<!-- Form Name -->
<legend>Aluno</legend>

<div class="control-group">
  <label class="control-label" for="textinput">Nome:</label>
  <div class="controls">
    <input id="txtNome" name="nome" type="text"  class="input-xlarge" value=<?php if(isset($coordenador)){ echo $coordenador['NOME']; } ?> >
  </div>
</div>

</fieldset>