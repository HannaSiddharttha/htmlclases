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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/api/product', 'ProductsController@index');
$router->get('/api/product/{id}', 'ProductsController@show');
$router->post('/api/product', 'ProductsController@store');
$router->put('/api/product/{id}', 'ProductsController@update');
$router->delete('/api/product/{id}', 'ProductsController@destroy');

$router->get('profile', [
    'as' => 'profile', 'uses' => 'UserController@showProfile'
]);


