<!DOCTYPE html>
<html>
	<head>
		<title>Mercado</title>
		<link rel="stylesheet" href="<?php  echo base_url("css/bootstrap.min.css"); ?>">
		<script src="<?php  echo base_url("js/bootstrap.min.js"); ?>"></script>
	</head>
	<body>
		<div class="container">
			<h1>Produtos</h1>
			<table class="table">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Preço</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($produtos as $produto) : ?>
						<tr>
							<td><?php echo $produto['nome'] ?></td>
							<td><?php echo numeroEmReais($produto['preco']) ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</body>
</html>