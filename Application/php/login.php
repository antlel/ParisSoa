<?php

require_once 'classes/User.php';
require_once 'classes/WebService.php';

$user = WebService::loginUser($_POST['username'], $_POST['password']);

if (is_numeric($user))
	header('Location: ../login.php?msg-info=Les identifiants sont invalides ou non reconnues.');
else
{
	session_start();
	$_SESSION['user'] = $user;
	header('Location: ../index.php?msg-ok=Bienvenue sur l\'application !');
}