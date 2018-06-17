<?php
require 'vendor/autoload.php';

// Hook Slim

$app = new \Slim\App;

$app->get('/', function()
{
	echo "Teste";
});

$app->run();
