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

Route::get('Myprofile','HomeController@loadProfile');

Route::get('logout', 'HomeController@logoutMe');

Route::get('email' , 'HomeController@resetPassword');

Route::get('register', 'HomeController@registerMe');

Route::get('Idea/create','PagesController@addIdea');

Route::post('Idea','PagesController@store');

Route::get('administrative','PagesController@administrative');

Route::get('Payments','PagesController@payments');

Route::get('Posts','PagesController@Posts');

Route::get('Comment','PagesController@comments');

Route::get('CleaningServices','PagesController@CleanSer');

Route::post('updatePost', 'PagesController@updatePost');

Route::get('Academic Division','PagesController@academicDiv');

Route::get('SIS','PagesController@sis');

Route::post('picture','ImageController@picture');

Route::post('verificationCode','WelcomeController@getCode');

Route::get('sendMail','WelcomeController@resetPassword');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

	
]);

Route::post('likeIncrease', 'PagesController@likeIncrease');

Route::post('likeDecrease','PagesController@likeDecraese');


Route::any('like','PagesController@postAddLike');

Route::any('addComment','PagesController@postAddComment');

Route::get('getComments','PagesController@getCommentsForPost');

Route::any('reward','RewardController@getLikesForSub');
