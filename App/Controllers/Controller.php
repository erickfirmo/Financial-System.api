<?php

namespace App\Controllers;

use Core\Request;
use Core\View;
use Core\Auth;

class Controller
{
    public $config;

    public function  __construct()
    {
        $this->config = include '../config/app.php';
    }

    public function view($view, $values=0)
    {
        return (new View())->getViewResponse($view, $values);
    }

    public function request()
    {
        return new Request;
    }

    public function redirect($route)
    {
        header("Location: ".(isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http')."".$_SERVER['HTTP_HOST'].$route);
        exit();
    }
    
    public function jsonResponse($array)
    {
        echo json_encode($array);
        exit();
    }
}