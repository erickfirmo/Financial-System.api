<?php

require_once __DIR__.'/../vendor/autoload.php';

session_start();

new ErickFirmo\DBConnection();

include_once __DIR__.'/../routes/api.php';
