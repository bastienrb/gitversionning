<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

$MailCheck = isEmailAvailable($db, $_POST['email']);
$NameCheck = isUsernameAvailable($db, $_POST['username']);
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

if ((!$MailCheck) || (!$NameCheck)){
	$_SESSION['message'] = "Votre nom d'utilisateur ou votre email est déjà utilisé";
	header('Location: register.php');
}

elseif(	isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && 
	!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	$hash = md5($_POST['password']);
	userRegistration($db, $_POST['username'], $_POST['email'], $hash);

	$_SESSION['message'] = 'Merci de votre inscription ! Vous pouvez désormais vous connecter.';
	header('Location: login.php');

}

else{ 
	$_SESSION['message'] = 'Erreur : Formulaire incomplet';
	header('Location: register.php');
}
}

else{
	$_SESSION['message'] = "Merci d'entrer une adresse mail valide.";
	header('Location: register.php');
}