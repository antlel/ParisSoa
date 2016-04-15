<?php
require_once 'php/classes/User.php';

session_start();

if (!isset($_SESSION['user']))
	header('Location: login.php');

$user = $_SESSION['user'];