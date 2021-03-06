<?php

/* configurações de rotas */

return [
    
    '/dividas/' => [
        'action' => 'DividaController@index',
        'method' => 'GET'
    ],
    
    '/dividas/create/' => [
        'action' => 'DividaController@create',
        'method' => 'GET'
    ],
    
    '/dividas/store/' => [
        'action' => 'DividaController@store',
        'method' => 'POST'
    ],

    '/dividas/$id/' => [
        'action' => 'DividaController@show',
        'method' => 'GET'
    ],

    '/dividas/$id/edit/' => [
        'action' => 'DividaController@edit',
        'method' => 'GET'
    ],

    '/dividas/$id/update/' => [
        'action' => 'DividaController@update',
        'method' => 'POST'
    ],

    '/dividas/$id/destroy/' => [
        'action' => 'DividaController@destroy',
        'method' => 'POST'
    ],

    '/dividasdocliente/add/' => [
        'action' => 'DividaDoClienteController@add',
        'method' => 'POST'
    ],

    '/dividasdocliente/$id/destroy/' => [
        'action' => 'DividaDoClienteController@destroy',
        'method' => 'POST'
    ],

    // authentication routes

    '/login/' => [
        'action' => 'Auth\UserController@showLoginForm',
        'method' => 'GET'
    ],

    '/admin/login/' => [
        'action' => 'Auth\AdminController@showLoginForm',
        'method' => 'GET'
    ],

    '/register/' => [
        'action' => 'Auth\UserController@showRegisterForm',
        'method' => 'GET'
    ],

    '/admin/register/' => [
        'action' => 'Auth\AdminController@showRegisterForm',
        'method' => 'GET'
    ],

    '/auth/register/' => [
        'action' => 'Auth\UserController@register',
        'method' => 'POST'
    ],

    '/auth/admin/register/' => [
        'action' => 'Auth\AdminController@register',
        'method' => 'POST'
    ],

    '/auth/login/' => [
        'action' => 'Auth\UserController@login',
        'method' => 'POST'
    ],
    
    '/auth/admin/login/' => [
        'action' => 'Auth\AdminController@login',
        'method' => 'POST'
    ],

    '/auth/logout/' => [
        'action' => 'Auth\UserController@logout',
        'method' => 'POST'
    ],

    '/auth/admin/logout/' => [
        'action' => 'Auth\AdminController@logout',
        'method' => 'POST'
    ],
];

