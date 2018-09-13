<?php 

include_once 'conexao.php';
$id = null;
$querySelect = $link->query("select * from $tb");




while($registros = $querySelect->fetch_assoc()):

	$igreja     		= $registros['igreja'];
	$tipoRelatorio     	= $registros['tipoRelatorio'];
	$data    		 	= $registros['data'];
	$destacador   		= $registros['destacador'];
	$obs    			= $registros['obs'];
	$assinatura     	= $registros['assinatura'];
	$preenchimento     	= $registros['preenchimento'];
	

	echo "<tr>";
	echo "
	<td>$igreja</td>
	<td>$tipoRelatorio</td>
	<td>$data</td>
	<td>$destacador</td>
	<td>$obs</td>
	<td>$assinatura</td>
	<td>$preenchimento</td>
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