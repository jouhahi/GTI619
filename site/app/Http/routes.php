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

// Route::get('/', function () {
//     return view('welcome');
// });

    Route::get('/', 'WelcomeController@index');

// Route::auth();

// Route::get('/home', 'HomeController@index');

Route::get('Administrateur', [
	'as' => 'adminLink',
	'uses' => 'AdminController@index',
	'middleware' => 'auth']);

Route::get('PreposeAuCarre', [
	'as' => 'cercleLink',
	'uses' => 'PreposeAuCarreController@index',
	'middleware' => 'auth']);

Route::get('PreposeAuCercle', [
	'as' => 'carreLink',
	'uses' => 'PreposeAuCercleController@index',
	'middleware' => 'auth']);


	Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
