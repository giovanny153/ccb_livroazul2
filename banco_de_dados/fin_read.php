<?php 

include_once 'conexao.php';
$tb = "fin_mov";

$querySelect = $link->query("select * from $tb");

while($registros = $querySelect->fetch_assoc()):
	$id = $registros['id'];
	$valor = $registros['valor'];
	$descricao  =$registros['descricao'];
	$data  =$registros['data'];
	$categoria  =$registros['categoria'];
	$conta  =$registros['conta'];
	$timestamp  =$registros['timestamp'];

	echo "<tr>";
	echo "
	<td>$valor</td>
	<td>$descricao</td>
	<td>$data</td>
	<td>$categoria</td>
	<td>$conta</td>
	<td>$timestamp</td>
	<td>
		<a href='fin_editar.php?id=$id'>
		<i class='material-icons'>edit</i>
	</td>
	<td>
		<a href='banco_de_dados/fin_delete.php?id=$id'>
		<i class='material-icons'>delete</i></a>
	</td>";
	echo "</tr>";
endwhile;