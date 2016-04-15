<?php require('php/check_admin.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Euro 2016 - Mise à jour d'un match</title>
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
				<h2>
					Modifier le match
					<a href="matchs.php" class="btn btn-danger pull-right" aria-label="Left Align">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Supprimer
					</a>
					<a href="matchs.php" class="btn btn-success pull-right" aria-label="Left Align" style="margin-right: 4px">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Clôre
					</a>
				</h2>
			</div>
			<?php include('templates/alerts.php') ?>
			
			<form action="matchs.php" method="GET">
				<fieldset>
					<div class="form-group">
						<label for="ctr-date">Date du match:</label>
						<input type="date" class="form-control" id="ctr-date" name="date"/>
					</div>
			        <div class="form-group">
			        	<label for="slc-team-A">Equipe A:</label>
						<select class="form-control" id="slc-team-A" name="teamA">
				            <option value="0">France</option>
				            <option value="1">Allemagne</option>
					  	</select>
			    	</div>
			    	<div class="form-group">
			        	<label for="slc-team-B">Equipe B:</label>
						<select class="form-control" id="slc-team-B" name="teamB">
				            <option value="0">France</option>
				            <option value="1">Allemagne</option>
					  	</select>
			    	</div>
			    	<div class="form-group">
			        	<label for="num-score-A">Score de l'équipe A:</label>
						<input type="number" class="form-control" id="num-score-A" name="scoreA" value="0"/>
			    	</div>
			    	<div class="form-group">
			        	<label for="num-score-B">Score de l'équipe B:</label>
						<input type="number" class="form-control" id="num-score-B" name="scoreB" value="0"/>
			    	</div>
					<div class="form-group">
						<input class="btn btn-primary btn-submit" type="submit" value="Mettre à jour"/>
					</div>
				</fieldset>
			</form>

			<?php include('templates/footer.php') ?>
		</div>
	</body>
</html>
