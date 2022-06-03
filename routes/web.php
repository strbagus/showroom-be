<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api/'], function() use($router){
    $router->get('merks', 'MerkController@index');
    $router->post('merk', 'MerkController@create');
    $router->get('merk/{id}', 'MerkController@show');
    $router->put('merk/{id}', 'MerkController@update');
    $router->delete('merk/{id}', 'MerkController@destroy');

    
    $router->get('types', 'TypeController@index');
    $router->post('type', 'TypeController@create');
    $router->get('type/{id}', 'TypeController@show');
    $router->put('type/{id}', 'TypeController@update');
    $router->delete('type/{id}', 'TypeController@destroy');
});