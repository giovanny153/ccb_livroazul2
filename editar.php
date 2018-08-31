<?php 
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Edição de Registros</h5><hr>	
	</div>
</div>


<?php 
	include_once 'banco_de_dados/conexao.php';
	$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
	$_SESSION['id'] = $id;
	$querySelect = $link->query("select * from tb_clientes where id='$id'");

	while($registros = $querySelect->fetch_assoc()):
		$id = $registros['id'];
		$nome = $registros['nome'];
		$email = $registros['email'];
		$telefone = $registros['telefone'];
	endwhile
?>

<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/update.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/avatar.png" alt="(imagem)" width="100">
	  <h5 class="light center container">Alteração</h5>
      </legend>
      

      <?php
        if(isset($_SESSION['msg'])):
          echo $_SESSION['msg'];
          session_unset();
        endif
      ?>

	    <!-- CAMPO NOME -->  
	      <div class ="input-field col s12">
	        <i class="material-icons prefix">account_circle</i>
	        <input type="text" name="nome" id="nome" value="<?php echo $nome?>" maxlength="40" required autofocus>
	        <label for ="nome">Nome do Cliente</label>
	      </div>

	    <!-- CAMPO CPF -->  
	      <!-- <div class ="input-field col s12">
	        <i class="material-icons prefix">account_circle</i>
	        <input type="text" name="cpf" id="cpf"  value="<?php echo $cpf?>" maxlength="40" >
	        <label for ="cpf">CPF</label> -->

	    <!-- CAMPO E-MAIL -->  
	      <div class ="input-field col s12">
	        <i class="material-icons prefix">email</i>
	        <input type="email" name="email" id="email" value="<?php echo $email?>" maxlength="40" >
	        <label for ="email">E-mail</label>
	      </div>

	      <!-- CAMPO TELEFONE -->  
	      <div class ="input-field col s12">
	        <i class="material-icons prefix">phone</i>
	        <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone?>" maxlength="40" >
	        <label for ="telefone">Telefone/Celular</label>
	      </div>

	      <!-- BOTÕES -->
	      <div class="input-field col s12">
	        <input type="submit" value="Alterar" class="btn blue">
	        <a href="cli_consultas.php" class="btn red">Cancelar</a>        
	      </div>
    </fieldset>
  </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>