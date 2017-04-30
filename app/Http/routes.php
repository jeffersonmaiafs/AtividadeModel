<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'WelcomeController@index');


//Testando este no momento
Route::get('exemplo', 'WelcomeController@exemplo');

//Direciona para o index através do caminho localhost:8000/admin/categories
Route::get('admin/categories', 'AdminCategoriesController@index');

//Direciona para o index através do caminho localhost:8000/admin/categories
Route::get('admin/products', 'AdminProductsController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);    
    



