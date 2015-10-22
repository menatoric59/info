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

//Route::get('/', 'IndexController');

Route::get('home', 'HomeController@index');

Route::get('/', function(){
	return view('index');
});
Route::get('index', function(){
	return Redirect::route('/');
});

Route::get('otra', function(){
	var_dump('testing');
});
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'rutas' => 'RutasController',
	'pila'=>'pilas_colasController',
	'cola'=>'pilas_colasController',
	'arboles'=>'ArbolesController',
	'lista'=>'ListasController',
]);

