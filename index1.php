<?php
session_start()
?>
<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  


<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/create.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/avatar.png" alt="(imagem)" width="100"></legend>
      <h5 class="light center">Cadastro de Clientes</h5>

      <!-- Exibir mensagem sobre cadastro não realizado por erro -->
      <?php
        if(isset($_SESSION['msg'])):
          echo $_SESSION['msg'];
          session_unset();
        endif
      ?>


    <!-- CAMPO NOME -->  
      <div class ="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nome" id="nome" maxlength="40"  autofocus>
        <label for ="nome">Nome do Cliente</label>
      </div>

    <!-- CAMPO CPF -->  
     <!--  <div class ="input-field col s12">
        <i class="material-icons prefix">account</i>
        <input type="text" name="cpf" id="cpf" maxlength="40" >
        <label for ="cpf">CPF</label> -->

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
