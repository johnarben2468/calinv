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


Route::get('/fabric/create', function()
{

	return View::make('fabric.create');

});
Route::post('/fabric/create', array('uses' => 'FabricController@create', 'as'=>'fabric/create'));
Route::get('/fabric/management', function()
{

	return View::make('fabric.management');

});

Route::post('search', array('uses' => 'FabricController@search', 'as'=>'search'));

Route::get('fabric/{id}', array('uses' => 'FabricController@fabric_view', 'as'=>'fabric_view'));
Route::get('debit/{id}', array('uses' => 'FabricController@fabric_debit_view', 'as'=>'fabric_debit_view'));
Route::get('credit/{id}', array('uses' => 'FabricController@fabric_credit_view', 'as'=>'fabric_credit_view'));
Route::get('debit', function()
{

	return View::make('debit');

});
Route::get('credit', function()
{

	return View::make('credit');

});

Route::post('debit', array('uses' => 'FabricController@debit', 'as'=>'debit'));

