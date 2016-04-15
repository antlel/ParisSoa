<!DOCTYPE html>
<html>
	<head>
		<title>Euro 2016 - Inscription</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/login.css"/>
		<link rel="start" title="Accueil" href="index.php"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
		<link rel="icon" type="image/png" href="img/favicon.png"/>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body class="background">
		<div class="container">
			<div class="row vertical-offset-100">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row-fluid user-row">
								<img src="img/logo.png" class="img-responsive"/>
							</div>
						</div>
						<div class="panel-body">
							<?php include('templates/alerts.php') ?>
							<p>Merci de saisir les informations ci-dessous pour créer votre compte joueur.</p>
							<form action="login.php" method="GET">
								<fieldset>
									<div class="form-group">
										<label for="firstname">Prénom:</label>
										<input class="form-control" id="firstname" name="firstname" type="text" placeholder="Saissisez votre prénom" autofocus="true"/>
									</div>
									<div class="form-group">
										<label for="name">Nom:</label>
										<input class="form-control" id="name" name="name" type="text" placeholder="Saissisez votre nom"/>
									</div>
									<div class="form-group">
										<label for="email">Email:</label>
										<input class="form-control" id="email" name="email" type="text" placeholder="Saissisez une adresse email"/>
									</div>
									<div class="form-group">
										<label for="birthdate">Date de naissance:</label>
										<input class="form-control" id="birthdate" name="birthdate" type="date"/>
									</div>
									<hr>
							        <div class="form-group">
										<label for="username">Pseudo:</label>
										<input class="form-control" id="username" name="username" type="text" placeholder="Saissisez un nom d'utilisateur"/>
									</div>
									<div class="form-group">
										<label for="password">Mot de passe:</label>
										<input class="form-control" id="password" name="password" type="password" placeholder="Saissisez un mot de passe"/>
									</div>
									<div class="form-group">
										<label for="password2">Confirmez le mot de passe:</label>
										<input class="form-control" id="password2" name="password2" type="password" placeholder="Saissisez à nouveau le mot de passe"/>
									</div>
									<br>
									<div class="form-group">
										<input class="btn btn-lg btn-primary btn-block" type="submit" id="login" value="S'inscrire"/>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
