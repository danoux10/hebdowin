<?php
@$validLogin = $_POST['login_btn'];

if(isset($validLogin)){
	$pseudoLogin = htmlspecialchars($_POST['login_pseudo']);
	$getPseudo = $bdd->prepare('SELECT * FROM player where pseudo=?');
	$getPseudo->execute([$pseudoLogin]);
	foreach($getPseudo as $dataLogin){
		$pseudo = $dataLogin['pseudo'];
		$idUser = $dataLogin['idUser'];
		if($pseudoLogin === $pseudo){
			setcookie('pseudo',$idUser);
			header('Location: ../view/information.php');
		}
		else{
			echo 'recommence idiot';
		}
	}
}