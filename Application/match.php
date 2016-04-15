<!DOCTYPE html>
<html>
	<head>
		<title>Euro 2016 - Parier sur un match</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/user.css"/>
		<link rel="start" title="Accueil" href="index.php"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="icon" type="image/png" href="img/favicon.png"/>s
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body role="document">
		<?php include('templates/header.php') ?>

		<div class="container vertical-offset-50">
			<div class="page-header">
				<h2>Parier sur le match EquipeA - EquipeB du 00/00/0000</h2>
			</div>
			<?php include('templates/alerts.php') ?>
			<p>Sélectionez le type de pari que vous shouaitez effectuer pour ce match et remplissez les informations demandées.</p>
			<form action="index.php" method="GET">
				<fieldset>
					<div class="form-group">
						<label for="btn-type">Type du pari:</label>
						<select class="form-control" id="btn-type" name="type">
					    	<option value="0">Sur le résultat du match</option>
				            <option value="1">Sur le score du match</option>
					  	</select>
					</div>
			        <div class="form-group type-0">
			        	<label for="btn-result">Résultat:</label>
						<select class="form-control" id="btn-result" name="result">
				            <option value="0">Match nul</option>
				            <option value="1">Victoire de l'équipe A</option>
				            <option value="2">Victoire de l'équipe B</option>
					  	</select>
			    	</div>
			    	<div class="form-group type-1 hidden">
						<label for="input-scoreA">Score de l'équipe A:</label>
						<input class="form-control" id="scoreA" name="scoreA" type="text" autofocus="true"/>
						<label for="input-scoreB">Score de l'équipe B:</label>
						<input class="form-control" id="scoreB" name="scoreB" type="text"/>
					</div>
					<div class="form-group">
						<input class="btn btn-primary btn-submit" type="submit" value="Parier"/>
					</div>
				</fieldset>
			</form>
			
			<?php include('templates/footer.php') ?>
		</div>
	</body>
	<script type="text/javascript" src="js/match.js"></script>
</html>
