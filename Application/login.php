<!DOCTYPE html>
<html>
	<head>
		<title>Euro 2016</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/login.css"/>
		<link rel="start" title="Accueil" href="index.php"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
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
							<form role="form" class="form-signin" action="index.php">
								<fieldset>
									<p>Merci de saisir vos identifiants de connexion.</p>
									<input class="form-control" placeholder="Nom d'utilisateur" id="username" type="text" autofocus="true"/>
									<input class="form-control" placeholder="Mot de passe" id="password" type="password"/>
									<a href="register.php">Vous n'avez pas de compte ?</a>
									<br></br>
									<input class="btn btn-lg btn-primary btn-block" type="submit" id="login" value="Se connecter"/>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
