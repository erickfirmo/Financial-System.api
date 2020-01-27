<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller 
{
    public function __construct()
    {

    }

    public function index()
    {
        echo 'Hello World!';
    }
}