<?php
@$validRegister = $_POST['register_btn'];

if(isset($validRegister)){
	$pseudoRegister = htmlspecialchars($_POST['register_pseudo']);
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
?>
