<?php

/*
|--------------------------------------------------------------------------
| Routes, dashboard
|--------------------------------------------------------------------------
|
| Dashboard
|
*/

    /**
     * @var \Illuminate\Routing\Router $router
     * View index dashboard
     * DashboardController@index
     */
    $router->get('/', ['as' => 'dashboard.index', 'uses' => 'Dashboard\DashboardController@index']);


