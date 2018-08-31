<?php 
session_start();
include_once 'conexao.php';

$id = $_SESSION['id'];
$tb = "fin_mov";

$valor     = filter_input(INPUT_POST, 'valor', 		FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao',  FILTER_SANITIZE_SPECIAL_CHARS);
$data 	   = filter_input(INPUT_POST, 'data', 		FILTER_SANITIZE_SPECIAL_CHARS);
$categoria = filter_input(INPUT_POST, 'categoria',  FILTER_SANITIZE_SPECIAL_CHARS);
$conta 	   = filter_input(INPUT_POST, 'conta', 		FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update $tb set valor='$valor', descricao='$descricao', data='$data',categoria='$categoria',conta='$conta', timestamp=null  where id='$id'");
$affected_rows = mysqli_affected_rows ($link);

if($affected_rows > 0):
	header("Location:../fin_consultas.php");
endif;
