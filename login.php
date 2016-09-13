<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){

		$hashh = md5($_POST['password']);

		$userc = userConnection($db, $_POST['email'], $hashh);

		if ($userc){
			header('Location: dashboard.php');
		}
		else{
			$error = $hashh;
		}
		

	}else{
		$error = 'Champs requis !';
	}
}

/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';