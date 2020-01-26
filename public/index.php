<?php

require_once __DIR__.'/../vendor/autoload.php';

new \Erickfirmo\DBConnection('../config/database.php');

session_start();

$route = (new Core\Router());