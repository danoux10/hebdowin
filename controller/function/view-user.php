<?php
$selectAll = $bdd->prepare('SELECT * FROM player');
$selectAll->execute();
function viewUser(){
	global $selectAll;
	
	foreach ($selectAll as $data){
		$idUser = $data['idUser'];
		$pseudo = $data['pseudo'];?>

		<span class="user">
			<input type="radio" name="user_select" id="<?php echo $idUser?>" value="<?php echo $idUser;?>">
			<label class="btn btn-name" for="<?php echo  $idUser?>"><?php echo $pseudo?></label>
		</span>
		
		
<?php	}
}


