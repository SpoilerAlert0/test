<fieldset>

<!-- Form Name -->
<legend>Aluno</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Ra:</label>
  <div class="controls">
    <input id="txtRa" name="ra" type="text" class="input-xlarge" value=<?php if(isset($aluno)){ echo $aluno['RA']; } ?>>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="textinput">Nome:</label>
  <div class="controls">
    <input id="txtNome" name="nome" type="text"  class="input-xlarge" value=<?php if(isset($aluno)){ echo $aluno['NOME']; } ?> >
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Endereco</label>
  <div class="controls">
    <input id="txtEndereco" name="endereco" type="text" class="input-xlarge" value=<?php if(isset($aluno)){ echo $aluno['ENDERECO']; } ?>>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Telefone:</label>
  <div class="controls">
    <input id="txtTelefone" name="telefone" type="text"  class="input-xlarge" value=<?php if(isset($aluno)){ echo $aluno['TELEFONE']; } ?>>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Rg:</label>
  <div class="controls">
    <input id="txtRg" name="rg" type="text"  class="input-xlarge" value=<?php if(isset($aluno)){ echo $aluno['RG']; } ?>>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="textinput">Cpf:</label>
  <div class="controls">
    <input id="txtCpf" name="cpf" type="text"  class="input-xlarge" value=<?php if(isset($aluno)){ echo $aluno['CPF']; } ?>>
  </div>
</div>
</fieldset>