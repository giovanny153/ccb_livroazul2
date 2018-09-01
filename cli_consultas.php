<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  
<div class="row container">
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr>



igreja
tipoRelatorio
data
destacador
obs
assinatura
preenchimento
		
<!-- INÍCIO DA TABELA COM OS RESULTADOS -->
		<table class="striped" id="busca">
			<thead>
				<tr>
					<th>Igreja</th>
					<th>Código Relatório</th>
					<th>Data Entrega</th>
					<th>Destacador</th>
					<th>Observação</th>
					<th>Assinatura</th>
					<th>Preenchimento</th>
				</tr>
			</thead>
			<tbody>
				<?php include_once 'banco_de_dados/cli_read.php';?>
			</tbody>

		</table>
	</div>
</div>

<?php include_once 'includes/footer.inc.php' ?>