<?php

Route::get('/', [
	'as' 	=> 'frontend.home',
	'uses'	=> 'FrontEndController@home'
]);



/**
 * Auth controllers
 * register, forgot password, login
 */
Route::controllers([
    'auth' 		=> 'Auth\AuthController',
    'password' 	=> 'Auth\PasswordController',
]);



Route::group(['prefix' => 'backend'],
	function()
	{
		
		Route::get('dashboard', [
			'as' 	=> 'backend.dashboard',
			'uses'	=> 'Backend\BackEndController@index',
		]);


		Route::resource('users', 'Backend\UserController');
		
	
		Route::resource('articles', 'ArticleController');
	}
);
