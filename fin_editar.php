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
	$tb = 'fin_mov';
	$_SESSION['id'] = $id;
	$querySelect = $link->query("select * from $tb where id='$id'");

	while($registros = $querySelect->fetch_assoc()):
		$id = $registros['id'];
		$valor     = $registros['valor'];
		$descricao = $registros['descricao'];
		$data 	   = $registros['data'];
		$categoria = $registros['categoria'];
		$conta 	   = $registros['conta'];
	endwhile
?>

<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/fin_update.php" method="post" class="col s12" id="editar">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/money.png" alt="(imagem)" width="100"></legend>
      <h5 class="light center">Lançamento Financeiro</h5>

      <!-- Exibir mensagem sobre cadastro não realizado por erro -->
      <?php
        if(isset($_SESSION['msg'])):
          echo $_SESSION['msg'];
          session_unset();
        endif
      ?>

 <?php include_once 'includes/fin_editar.inc.php' ?>
    

<?php include_once 'includes/footer.inc.php' ?>