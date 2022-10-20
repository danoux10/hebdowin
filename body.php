<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<h1>Bienvenue sur Hebdo Win</h1>
		<div>
			<span id="login-btn" class="btn btn-login">Connexion</span>
			<span id="register-btn" class="btn btn-register">s'inscrire</span>
		</div>
	</header>
	<?php
		include_once 'view/login.html';
		include_once 'view/register.html';
	?>
	<?php
		include_once 'view/home.html';
	?>
	<footer>
		<script src="script.js"></script>
	</footer>
</body>
<script>
	const head = document.querySelector('header');
  head.style.display='none';
</script>
</html>