<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');

Route::group(['prefix' => 'onfarm'], function()
{
	Route::get('/', 'OnfarmController@index');
	Route::get('/create', 'OnfarmController@create');
	Route::post('/', 'OnfarmController@store');
	Route::get('/{onfarm}/view', 'OnfarmController@view');
});

Route::group(['prefix' => 'seed'], function()
{
	Route::get('/create/{onfarm}', 'SeedController@create');
	Route::post('/', 'SeedController@store');
});

Route::group(['prefix' => 'supplier'], function()
{
	Route::post('/', 'SupplierController@store');
});
