<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><image src="img/logo.min.png"/></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse" style="padding-top: 6px">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Matchs disponibles</a></li>
				<li><a href="ranking.php">Classement</a></li>
				<?php 
					if ($user->isAdmin())
						echo('<li><a href="matchs.php">Gestion des matchs</a></li>');
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-username">
					<?php 
						echo($user->getName().' '.$user->getLastname().' ');
						if($user->isAdmin())
							echo('(Administrateur) ');
						echo('-');
					?>
				</li>
	        	<li><a href="php/logout.php">Se déconnecter</a></li>
	        </ul>
		</div>
	</div>
</nav>