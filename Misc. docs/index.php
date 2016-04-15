<?php

	/**
	 * Redirige tous les appelles vers routeur.php
	 * 
	 * @Author Antoine&Anthony
	 */
include_once("routeur.php");
$routeur = new routeur();
$routeur->doProcess();