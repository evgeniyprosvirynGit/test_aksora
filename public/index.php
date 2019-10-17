<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

require __DIR__ . '/../vendor/autoload.php';

$database   = new \journal\app\database();
$app        = new \journal\app\core\App();
$controller = new \journal\app\core\Controller();