<?php

/*
|--------------------------------------------------------------------------
| Routes, that has public access
|--------------------------------------------------------------------------
|
| Verify, Authorize
|
*/

    /**
     * @var \Illuminate\Routing\Router $router
     * View login form
     * AuthController@index
     */
    $router->get('verify', ['as' => 'verify.index', 'uses' => 'AuthController@index']);

    /**
     * Lookup team_members table, generate password and send email
     * AuthController@verify
     */
    $router->post('verify/email', ['as' => 'verify.post', 'uses' => 'AuthController@verify']);

    /**
     * Authorize by email and password
     * AuthController@grantLogin
     */
    $router->post('authorize', ['as' => 'authorize', 'uses' => 'AuthController@grantLogin']);

    /**
     * Logout user
     * AuthController@logout
     */
    $router->get('logout', ['as' => 'authorize.logout', 'uses' => 'AuthController@logout']);
