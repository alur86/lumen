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

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});



$router->group(
    [
        'prefix' => '/company'
    ], function ($router) {
        $router->get('/', 'CompanyController@index');
        $router->post('/create', 'CompanyController@create');
        $router->get('/show/{id}', 'CompanyController@show');
        $router->put('/update/{id}', 'CompanyController@update');
        $router->delete('/delete/{id}', 'CompanyController@delete');
    }
);


$router->group(
    [
        'prefix' => '/purchase'
    ], function ($router) {
        $router->get('/', 'PurchaseController@index');
        $router->post('/create', 'PurchaseController@create');
        $router->get('/show/{id}', 'PurchaseController@show');
        $router->put('/update/{id}', 'PurchaseController@update');
        $router->delete('/delete/{id}', 'PurchaseController@delete');
    }
);



