<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>


<body>
	<div id='stars'></div>
	<div id='stars2'></div>
	<div id='stars3'></div>
	
	<main id="home-page">
		<header>
			<div class="title-contatnt" id="titre">
				<h1>Bienvenue sur HebdoWin</h1>
				<span class="underline"></span>
			</div>

			<div>
				<span id="login-btn" class="btn btn-login">Connexion</span>
				<span id="register-btn" class="btn btn-register">s'inscrire</span>
			</div>
		</header>
		<?php
			include_once 'view/login.html';
			include_once 'view/register.html';
		?>
	</main>
	
	<footer>
		<script src="script.js"></script>
	</footer>

</body>
<script>
</script>
</html>