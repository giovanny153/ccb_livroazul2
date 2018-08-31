<?php
session_start()
?>
<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  


<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/cli_create.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/download.png" alt="(imagem)" width="100"></legend>
      <h5 class="light center">Cadastro de Folha</h5>

      <!-- Exibir mensagem sobre cadastro não realizado por erro -->
      <?php
        if(isset($_SESSION['msg'])):
          echo $_SESSION['msg'];
          session_unset();
        endif
      ?>


      <div class="input-field col s12">
        <i class="material-icons prefix">home</i>
        <select name='conta'>          
          <option disabled selected></option>
          <option value="22-1163">Tibério</option>
          <option value="22-1232">Central</option>
          <option value="22-1243">Greenville</option>
        </select>
        <label>Igreja</label>
      </div>

      

    <!-- CAMPO E-MAIL -->  
      <div class ="input-field col s12">
        <i class="material-icons prefix">date_range</i>
        <input type="date" name="data" id="data" maxlength="40" >
        <label for ="data">Data da Entrega</label>
      </div>

    <!-- CAMPO E-MAIL -->  
      <div class ="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input type="email" name="email" id="email" maxlength="40" >
        <label for ="email">E-mail</label>
      </div>

      <!-- CAMPO TELEFONE -->  
      <div class ="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input type="tel" name="telefone" id="telefone" maxlength="40" >
        <label for ="telefone">Telefone/Celular</label>
      </div>

      <!-- BOTÕES -->
      <div class="input-field col s12">
        <input type="submit" value="Cadastrar" class="btn blue">
        <input type="submit" value="Limpar" class="btn red">
      </div>


    </fieldset>
  </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>
