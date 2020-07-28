
<?php
	include_once './views/common/header.php';
	include_once 'models/Conexao.php';
	include_once 'models/Manager.php';
	$manager = new Manager();

?>

<div class="container">
	<div class="page-header text-center">
		<div class="jumbotron">
		<h1><strong>Meus Locais</strong></h1>
		<p class="lead">App para cadastrar os locais que já visitei (ou que gostaria de visitar) no Brasil</p>
	</div>
	</div>

	<h5 class="text-right">
		<a href="views/cadastro.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>

	<!-- Iniciando a tabela -->

	<div class="table-responsive">
		
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>NOME DO LOCAL</th>
					<th>DATA DA VISITA</th>
					<th colspan="3" class="text-center">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($manager->listLocais("locais") as $local): ?>
				<tr>
					<td><?php echo $local['nome']; ?></td>
					<td><?php echo (new DateTime($local['data']))->format('d/m/Y'); ?></td>
					<td>
						<form action="/views/editar.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $local['id']  ?>">
							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" action="/controllers/DeleteController.php" onclick="return confirm('Tem certeza que deseja excluir ?');">
							<input type="hidden" name="id" value="<?php echo $local['id']  ?>">
							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>
						</form>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<hr>
	</div>

	<!-- Fim da Tabela -->
</div>

<?php include_once './views/common/footer.php'; ?>

</body>
</html>