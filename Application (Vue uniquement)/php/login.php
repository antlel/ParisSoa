<?php

require 'classes/WebService.php';

$result = WebService::loginUser($_POST['username'], $_POST['password']);

if (is_null($result))
	header('Location: login.php');
else
	echo("connect" . $result);


