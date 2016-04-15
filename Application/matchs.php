<!DOCTYPE html>
<html>
	<head>
		<title>Euro 2016 - Liste des matchs disponibles</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/user.css"/>
		<link rel="start" title="Accueil" href="index.php"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
		<link rel="icon" type="image/png" href="img/favicon.png"/>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body role="document">
		<?php include('templates/header.php') ?>

		<div class="container vertical-offset-50">
			<div class="page-header">
				<h2>Gestion des matchs</h2>

			</div>
			<?php include('templates/alerts.php') ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Date</th>
						<th>Equipe A</th>
						<th>Equipe B</th>
						<th>Statut</th>
						<th>Score A</th>
						<th>Score B</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>14/04/2016</td>
						<td>France</td>
						<td>Allemagne</td>
						<td>
							<a href="match.php" class="btn btn-sm btn-success">Parier</a>
						</td>
					</tr>
					<tr>
						<td>13/04/2016</td>
						<td>France</td>
						<td>Allemagne</td>
						<td><a href="match.php" class="btn btn-sm btn-success">Parier</button></td>
					</tr>
					<tr>
						<td>12/04/2016</td>
						<td>France</td>
						<td>Allemagne</td>
						<td><a href="match.php" class="btn btn-sm btn-success">Parier</button></td>
					</tr>
				</tbody>
			</table>

			<?php include('templates/footer.php') ?>
		</div>
	</body>
</html>
