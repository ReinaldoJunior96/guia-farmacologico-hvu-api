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

$router->group(['prefix'=>'farmacos'], function () use($router){
    $router->get('/', 'FarmacoController@index');
    $router->get('/{farmaco}', 'FarmacoController@show');
    $router->post('/', 'FarmacoController@store');
    $router->put('/{farmaco}', 'FarmacoController@update');
    $router->delete('/{farmaco}', 'FarmacoController@delete');
    /* Retorna um Inner Join entre duas tabelas*/
    $router->get('/{farmaco}/recomendacao', 'FarmacoController@farmacoRecomendacao');

});

$router->group(['prefix'=>'recomendacao'], function() use($router){
    $router->post('/', 'RecomendacaoController@store');
    $router->put('/{rec}', 'RecomendacaoController@update');
    $router->delete('/{rec}', 'RecomendacaoController@delete');
});

$router->group(['prefix'=>'dose'], function () use($router){
    $router->post('/', 'DoseController@store');
    $router->put('/{dose}', 'DoseController@update');
    $router->delete('/{dose}', 'DoseController@delete');
});
