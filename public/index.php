<?php

require_once __DIR__.'/../vendor/autoload.php';

new \ErickFirmo\DBConnection('../config/database.php');

session_start();

$router = new \ErickFirmo\Router;
$router->setNamespace('App\Controllers\\');


$router->get(['/', 'HomeController@index']);

$router->get(['/clientes', 'ClienteController@select']);
$router->get(['/clientes/create/', 'ClienteController@create']);
$router->get(['/clientes/{$id}/edit/', 'ClienteController@create']);
$router->get(['/clientes/{$id}/', 'ClienteController@show']);

$router->post(['/clientes/store/',  'ClienteController@store']);
$router->put(['/clientes/{$id}/update', 'ClienteController@update']);
$router->delete(['/clientes/{$id}/destroy', 'ClienteController@destroy']);

$router->run();