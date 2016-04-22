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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('profile','HomeController@loadProfile');

Route::get('logout', 'HomeController@logoutMe');

Route::get('email' , 'HomeController@resetPassword');

Route::get('register', 'HomeController@registerMe');

Route::get('administrative','PagesController@administrative');

Route::get('Payments','PagesController@payments');

Route::get('Posts','PagesController@Posts');

Route::get('Comment','PagesController@comments');



Route::get('Academic Division','PagesController@academicDiv');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

	
]);

