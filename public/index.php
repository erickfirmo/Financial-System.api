<?php

require_once __DIR__.'/../vendor/autoload.php';

session_start();

$query_builder = (new \ErickFirmo\Model('../config/database.php'));

require_once __DIR__.'/../routes/api.php';


$router->run();