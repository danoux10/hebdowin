<?php
	$getInfo = $bdd->prepare('SELECT * FROM player where idUser=?');
	$getInfo->execute([$_COOKIE['pseudo']]);
	foreach ($getInfo as $data){
		$pseudo = $data['pseudo'];
		$tankWin = $data['tankData'];
		$dpsWin = $data['dpsData'];
		$healWin = $data['healData'];
	}
	
	
	//link tank
	@$tankSub = $_POST['tank_down'];
	@$tankAdd = $_POST['tank_up'];
	
	$updateTank = $bdd->prepare('UPDATE player set tankData = ? where idUser = ? ');

	if(isset($tankSub)){
		$tankWin--;
		$updateTank->execute([$tankWin,$_COOKIE['pseudo']]);
	}
	
	if(isset($tankAdd)){
		$tankWin++;
		$updateTank->execute([$tankWin,$_COOKIE['pseudo']]);
	}
	
	//link dsp
	@$dpsSub = $_POST['dps_down'];
	@$dpsAdd = $_POST['dps_up'];
	
	$updateDps = $bdd->prepare('UPDATE player set dpsData = ? where idUser = ? ');
	
	if(isset($dpsSub)){
		$dpsWin--;
		$updateDps->execute([$dpsWin,$_COOKIE['pseudo']]);
	}
	
	if(isset($dpsAdd)){
		$dpsWin++;
		$updateDps->execute([$dpsWin,$_COOKIE['pseudo']]);
	}

	//link heal
	@$healSub = $_POST['heal_down'];
	@$healAdd = $_POST['heal_up'];
	
	$updateHeal = $bdd->prepare('UPDATE player set healData = ? where idUser = ? ');
	
	if(isset($healSub)){
		$healWin--;
		$updateHeal->execute([$healWin,$_COOKIE['pseudo']]);
	}
	
	if(isset($healAdd)){
		$healWin++;
		$updateHeal->execute([$healWin,$_COOKIE['pseudo']]);
	}

//link reset
	@$reset = $_POST['reset'];
	$hebdoReset = $bdd->prepare('UPDATE player set tankData=?,dpsData=? ,healData = ? where idUser = ? ');
	if(isset($reset)){
		$tankWin = 0;
		$dpsWin = 0;
		$healWin = 0;
		$hebdoReset->execute([$tankWin,$dpsWin,$healWin,$_COOKIE['pseudo']]);
	}