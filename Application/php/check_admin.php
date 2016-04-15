<?php
require_once 'php/check_login.php';

if (!$user->isAdmin())
	header('Location: index.php?msg-error=Vous n\'avez pas les droits suffisants pour consulter cette page.');