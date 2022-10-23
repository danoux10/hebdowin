<?php
@$validRegister = $_POST['register_btn'];
$reponce = null;

if(isset($validRegister)){
	$pseudoRegister = htmlspecialchars($_POST['register_pseudo']);
	$verifPseudo = $bdd->prepare('SELECT * From player where pseudo=?');
	$verifPseudo->execute([$pseudoRegister]);
	foreach ($verifPseudo as $data){
		$validPseudo = $data['pseudo'];
	}
	if($validPseudo === null){
	$addPseudo = $bdd->prepare('INSERT INTO player set pseudo=?,tankData=?,dpsData=?,healData=?');
	$addPseudo->execute([$pseudoRegister,0,0,0]);
	$selectLast = $bdd->prepare('SELECT idUser from player order by idUser desc limit 1');
	$selectLast ->execute();
		foreach ($selectLast as $data){
		$idUser=$data['idUser'];
		$_SESSION['idUser'] = $idUser;
	}
	header('Location: ../view/information.php');
	}
	else{
		$reponce = 'pseudo Déjà enregistré';
	}
}
?>
