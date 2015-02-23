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
	return View::make('login');
});

Route::group(['before' => 'auth'], function(){

	Route::get('admin', ['as' => 'admin', 'uses' => 'AdminsController@index']);

	Route::get('logout', 'SessionsController@destroy');

	Route::resource('products', 'ProductsController', ['except' => ['edit', 'update', 'show']]);

	Route::resource('orders', 'OrdersController', ['except' => ['edit', 'update', 'show']]);

	Route::get('reporting', ['as' => 'reporting', 'uses' => 'ReportingsController@index']);

});

Route::get('login', 'SessionsController@login');

Route::post('login', ['as' => 'login.store', 'uses' => 'SessionsController@store']);