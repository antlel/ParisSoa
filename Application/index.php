<!DOCTYPE html>
<html>
	<head>
		<title>Euro 2016 - Liste des matchs disponibles</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/user.css"/>
		<link rel="start" title="Accueil" href="index.php"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="icon" type="image/png" href="img/favicon.png"/>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body role="document">
		<?php include('templates/header.php') ?>

		<div class="container vertical-offset-50">
			<div class="page-header">
				<h2>Liste des matchs disponibles</h2>
			</div>
			<?php include('templates/alerts.php') ?>
			<p>Sélectionez un des match ci-dessous pour effectuer un pari.</p>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Date</th>
						<th>Equipe 1</th>
						<th>Equipe 2</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="availables-matchs">
					<tr>
						<td>14/04/2016</td>
						<td>France</td>
						<td>Allemagne</td>
						<td><a href="match.php" class="btn btn-sm btn-success">Parier</button></td>
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
