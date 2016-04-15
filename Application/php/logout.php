<?php

require_once 'classes/WebService.php';

session_start();
session_destroy();

header('Location: ../login.php?msg-ok=Vous avez été déconnecté correctement.');