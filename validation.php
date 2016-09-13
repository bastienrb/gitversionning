<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

$MailCheck = isEmailAvailable($db, $_POST['email']);
$NameCheck = isUsernameAvailable($db, $_POST['username']);


if ((!$MailCheck) || (!$NameCheck)){
	$_SESSION['message'] = "Votre nom d'utilisateur ou votre email est déjà utilisé";
	header('Location: register.php');
}

elseif(	isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && 
	!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	userRegistration($db, $_POST['username'], $_POST['email'], $_POST['password']);
	header('Location: dashboard.php');

}

else{ 
	$_SESSION['message'] = 'Erreur : Formulaire incomplet';
	header('Location: register.php');
}