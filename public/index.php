<?php

require_once __DIR__.'/../vendor/autoload.php';

new \ErickFirmo\DBConnection('../config/database.php');

session_start();

$route = (new Core\Router());