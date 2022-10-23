<?php
@$validUser = $_POST['valid_user'];

if (isset($validUser)) {
	$userSelect = $_POST['user_select'];
	$userSelectInt = intval($userSelect);
	$_SESSION['idUser'] = $userSelectInt;
	header('Location:information.php');
}
