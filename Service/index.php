<?php
namespace Service;

require_once('Autoloader.php');
\Autoloader::register();

$dispatcher = new Dispatcher();
$dispatcher->doProcess();
