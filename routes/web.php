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
    
    $router->get('admins', 'AdminController@index');
    $router->post('admin', 'AdminController@create');
    $router->get('admin/{id}', 'AdminController@show');
    $router->put('admin/{id}', 'AdminController@update');
    $router->delete('admin/{id}', 'AdminController@destroy');
    
    $router->get('cars', 'CarController@index');
    $router->post('car', 'CarController@create');
    $router->get('car/{id}', 'CarController@show');
    $router->put('car/{id}', 'CarController@update');
    $router->delete('car/{id}', 'CarController@destroy');
    
    $router->get('carimages', 'CarimageController@index');
    $router->post('carimage', 'CarimageController@create');
    $router->get('carimage/{id}', 'CarimageController@show');
    $router->put('carimage/{id}', 'CarimageController@update');
    $router->delete('carimage/{id}', 'CarimageController@destroy');
});