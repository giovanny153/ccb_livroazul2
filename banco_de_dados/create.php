<?php 
session_start();
include_once 'conexao.php';

// filter_input = para não usar a super gloval _POST usar para evitar comentar código no formulario
// INPUT POST = conseguir usar o metodo post para pegar a variável
// FILTER_SANITIZE_SPECIAL_CHARS = interpretar special char como char
$nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
// $cpf 	  = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

// validar se email já está cadastrado
$querySelect = $link->query("select email from tb_clientes");
$array_emails=[];

while($emails = $querySelect->fetch_assoc()):
	$emails_existentes = $emails['email'];
	array_push($array_emails,$emails_existentes);
endwhile;

// Mensagem de erro caso houver email repetido
if(in_array($email, $array_emails)):
	$_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cliente cadastrado com esse email'."</p>";
	header ("Location:../");
else:
	$queryInsert = $link->query("insert into tb_clientes values (default,'$nome','$email','$telefone', default)");
	$affected_rows = mysqli_affected_rows($link);

	if($affected_rows > 0):
		$_SESSION ['msg'] ="<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
		header ("Location:../");
	endif;
endif;