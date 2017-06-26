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
	Route::get('/{onfarm}/view', 'OnfarmController@show');
	Route::put('/{onfarm}/plant', 'OnfarmController@plant');
});

Route::group(['prefix' => 'seed'], function()
{
	Route::get('/create/{onfarm}', 'SeedController@create');
	Route::get('/{seed}/view', 'SeedController@show');
	Route::get('/{seed}/edit', 'SeedController@edit');
	Route::put('/{seed}', 'SeedController@update');
	Route::post('/', 'SeedController@store');
});

Route::group(['prefix' => 'supplier'], function()
{
	Route::post('/', 'SupplierController@store');
	Route::get('/', 'SupplierController@index');
	Route::get('/create', 'SupplierController@create');
});

Route::group(['prefix' => 'poktan'], function()
{
	Route::get('/', 'PoktanController@index');
	Route::post('/', 'PoktanController@store');
	Route::get('/create', 'PoktanController@create');
	Route::get('/{poktan}/edit', 'PoktanController@edit');
	Route::put('/{poktan}', 'PoktanController@update');
});

Route::group(['prefix' => 'activity'], function()
{
	Route::get('/create/{onfarm}', 'ActivityController@create');
	Route::post('/', 'ActivityController@store');
	Route::get('/{activity}/view', 'ActivityController@show');
	Route::get('/{activity}/edit', 'ActivityController@edit');
	Route::put('/{activity}', 'ActivityController@update');
});

Route::group(['prefix' => 'seedphoto'], function()
{
	Route::post('/', 'SeedPhotoController@store');
	Route::post('/{seedPhoto}', 'SeedPhotoController@update');
	Route::delete('/{seedPhoto}', 'SeedPhotoController@destroy');
});

Route::group(['prefix' => 'activityphoto'], function()
{
	Route::post('/', 'ActivityPhotoController@store');
	Route::post('/{activityPhoto}', 'ActivityPhotoController@update');
	Route::delete('/{activityPhoto}', 'ActivityPhotoController@destroy');
});
