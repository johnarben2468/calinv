<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	if(Auth::check())
	{
   	return View::make('main');
	}
	return View::make('login');
});
Route::get('/login', function()
{
	if(Auth::check())
	{
		return Redirect::to('/');
	}
	return View::make('login');
});

Route::post('login', array('uses' => 'UserController@doLogin', 'as'=>'login'));
Route::get('logout', array('uses' => 'UserController@doLogout', 'as'=>'logout'));
