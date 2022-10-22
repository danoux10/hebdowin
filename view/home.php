<?php include_once '../controller/header.php';?>
<main id="home-page">
	<header>
		<div class="title-contatnt" id="titre">
			<h1>Bienvenue sur HebdoWin</h1>
			<span class="underline"></span>
		</div>
		
		<div>
			<span id="login-btn" class="btn btn-login">Connexion</span>
			<span id="register-btn" class="btn btn-register">S'inscrire</span>
		</div>
	</header>
	<?php
	include_once '../model/login.html';
	include_once '../model/register.html';
	?>
</main>
<script src="../scripts/home.js"></script>
<?php include_once '../controller/footer.html'; ?>