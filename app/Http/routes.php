<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'HomeController@index');

/* Auth Block */
$app->get('/auth/register', ['as' => 'auth_register', 'uses' => 'AccountController@getRegister']);
$app->post('/auth/register', 'AccountController@postRegister');
$app->get('/auth/login', ['as' => 'auth_login', 'uses' => 'AuthController@getLogin');
$app->post('/auth/login', 'AuthController@postLogin');
$app->get('/auth/password/reset', ['as' => 'auth_password_reset', 'uses' => 'AuthController@getLogin');
$app->post('/auth/password/reset', 'AuthController@postLogin');


/* Account Block */
$app->get('/account/home', 'AccountController@home');

/* Bradcast Block */
$app->get('/broadcast/auth', ['as' => 'broadcast_auth', 'uses' => 'BroadcastController@auth']]);