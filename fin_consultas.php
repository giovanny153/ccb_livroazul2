<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  
<div class="row container">
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr>

<!-- INÍCIO DA TABELA COM OS RESULTADOS -->
		<table class="striped" id="busca">
			<thead>
				<tr>
					<th>Valor</th>
					<th>Descricao</th>
					<th>Data</th>
					<th>Categoria</th>
					<th>Conta</th>
					<th>Timestamp</th>
				</tr>
			</thead>
			<tbody>
				<?php include_once 'banco_de_dados/fin_read.php';?>
			</tbody>

		</table>
	</div>
</div>

<?php include_once 'includes/footer.inc.php' ?>