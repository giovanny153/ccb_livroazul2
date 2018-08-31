<?php 

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_clientes");

while($registros = $querySelect->fetch_assoc()):
	$id = $registros['id'];
	$nome = $registros['nome'];
	$email  =$registros['email'];
	$telefone  =$registros['telefone'];
	// $cpf  =$registros['cpf'];
	$timestamp  =$registros['DATA'];

	echo "<tr>";
	echo "
	<td>$nome</td>
	<td>$email</td>
	<td>$telefone</td>
	<td>$timestamp</td>
	<td>
		<a href='editar.php?id=$id'>
		<i class='material-icons'>edit</i>
	</td>
	<td>
		<a href='banco_de_dados/delete.php?id=$id'>
		<i class='material-icons'>delete</i></a>
	</td>";
	echo "</tr>";
endwhile;