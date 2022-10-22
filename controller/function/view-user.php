<?php
$host = 'localhost';
$dbname = 'hebdowin';
$username = 'root';
$password = 'password';

$bdd= new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$username", "$password");

$selectAll = $bdd->prepare('SELECT * FROM player');

	
	foreach ($selectAll as $data){
		$idUser = $data['idUser'];
		$pseudo = $data['pseudo'];
		
		$user="<span class='user'>
			<input type='radio' name='userSelect' id=<?php echo $idUser ?> value=<?php echo $idUser; ?>
			<label for=<?php $idUser ?>><?php echo $pseudo ?></label>
		</span>"
	
	}
