<?php 
session_start();
include_once 'conexao.php';

$tb = "fin_mov";

$valor     = filter_input(INPUT_POST, 'valor', 		FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao',  FILTER_SANITIZE_SPECIAL_CHARS);
$data 	   = filter_input(INPUT_POST, 'data', 		FILTER_SANITIZE_SPECIAL_CHARS);
$categoria = filter_input(INPUT_POST, 'categoria',  FILTER_SANITIZE_SPECIAL_CHARS);
$conta 	   = filter_input(INPUT_POST, 'conta', 		FILTER_SANITIZE_SPECIAL_CHARS);

// $valor     = 'valor';
// $descricao = 'descricao';
// $data 	   = 'dat23a';
// $categoria = 'categoria';
// $conta 	   = 'conta';


$queryInsert = $link->query("insert into fin_mov values (NULL,'$valor','$descricao','$data', '$categoria','$conta',NULL)");
$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
	$_SESSION ['msg'] ="<p class='center green-text'>".'Lançamento realizado com sucesso!'."<br>";	
	header ("Location:../fin_cad.php");
else:
	$_SESSION ['msg'] ="<p class='center red-text'>".'Deu ruim, Verifique o select!!'."<br>";	
	header ("Location:../fin_cad.php");

endif;


// http://localhost/cadcli/banco_de_dados/fin_cad_model.php