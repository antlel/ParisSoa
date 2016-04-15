<?php
require 'classes/User.php';

$user = new User(0, $_POST['pseudo'], "lastname", $_POST['pseudo'], "1994-09-01", "password", "email", 1);

echo json_encode($user->toArray());