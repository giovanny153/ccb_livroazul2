<?php 
session_start();
include_once 'conexao.php';

// igreja
// tipoRelatorio
// data
// destacador
// obs
// assinatura
// preenchimento

$igreja     		= filter_input(INPUT_POST, 'igreja');
$tipoRelatorio     	= filter_input(INPUT_POST, 'tipoRelatorio');
$data    		 	= filter_input(INPUT_POST, 'data');
$destacador   		= filter_input(INPUT_POST, 'destacador');
$obs    			= filter_input(INPUT_POST, 'obs');
$assinatura     	= filter_input(INPUT_POST, 'assinatura');
$preenchimento     	= filter_input(INPUT_POST, 'preenchimento');
// $tb = "ccb_movimentacao";
$query = "insert into $tb values 
								(default,
								'$igreja',
								'$tipoRelatorio',
								'$data', 
								'$destacador',  
								'$obs',    	
								'$assinatura',   
								'$preenchimento',
								default)";

echo "igreja: ".$igreja . '<br />';
echo "tipo:".$tipoRelatorio . '<br />';
echo "data: ".$data . '<br />'   	;	 
echo "destacador: ".$destacador  . '<br />' ;
echo "obs: ".$obs    . '<br />'		;
echo "assinatura: ".$assinatura   . '<br />';
echo "preenchimento: ".$preenchimento . '<br />';
echo "tabela: ".$tb . '<br />';
echo "query: ".$query . '<br />';



$queryInsert = $link->query($query);
$affected_rows = mysqli_affected_rows($link);

	if($affected_rows > 0){
		$_SESSION ['msg'] ="<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
		echo "<hr>sucesso!!!";}else {echo "<hr>deu ruim!";}
		header ("Location:../cli_cad.php");
	
