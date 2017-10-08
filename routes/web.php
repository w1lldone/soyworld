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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');

Route::group(['prefix' => 'user'], function()
{
	Route::put('/{user}/email', 'UserController@changeEmail');
	Route::put('/{user}/password', 'UserController@changePassword');
});

Route::group(['prefix' => 'profile'], function()
{
	Route::get('/', 'ProfileController@index');
	Route::get('/edit', 'ProfileController@edit');
	Route::put('/', 'ProfileController@update');
	Route::get('/email', 'ProfileController@editEmail');
	Route::put('/email', 'ProfileController@updateEmail');
	Route::get('/password', 'ProfileController@editPassword');
	Route::put('/password', 'ProfileController@updatePassword');
});

Route::group(['prefix' => 'onfarm'], function()
{
	Route::get('/', 'OnfarmController@index');
	Route::get('/create', 'OnfarmController@create');
	Route::post('/', 'OnfarmController@store');
	Route::get('/{onfarm}/view', 'OnfarmController@show');
	Route::put('/{onfarm}/plant', 'OnfarmController@plant');
	Route::delete('/{onfarm}', 'OnfarmController@destroy');
});

Route::group(['prefix' => 'plant'], function()
{
	Route::post('/{onfarm}', 'PlantController@store');
	Route::get('/{onfarm}/edit', 'PlantController@edit');
	Route::put('/{onfarm}', 'PlantController@update');
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
	Route::get('/{supplier}/edit', 'SupplierController@edit');
	Route::get('/create', 'SupplierController@create');
	Route::put('/{supplier}', 'SupplierController@update');
	Route::delete('/{supplier}', 'SupplierController@destroy');
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
	Route::delete('/{activity}', 'ActivityController@destroy');
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

Route::group(['prefix' => 'onfarmcost'], function()
{
	Route::get('/create/{onfarm}', 'OnfarmCostController@create');
	Route::post('/', 'OnfarmCostController@store');
	Route::get('/{onfarmCost}/view', 'OnfarmCostController@show');
	Route::get('/{onfarmCost}/edit', 'OnfarmCostController@edit');
	Route::delete('/{onfarmCost}', 'OnfarmCostController@destroy');
});

Route::group(['prefix' => 'harvest'], function(){
	Route::get('/', 'HarvestController@index');
	Route::get('/create', 'HarvestController@create');
	Route::get('/{harvest}/view', 'HarvestController@show');
	Route::get('/{harvest}/postharvest', 'PostharvestController@create');
	Route::post('/', 'HarvestController@store');
	Route::put('/{harvest}/sale', 'HarvestSalesController@update');
});

Route::group(['prefix' => 'stock'], function(){
	Route::post('/', 'StockController@store');
});

Route::resource('postharvest', 'PostharvestController');

Route::group(['prefix' => 'soybean'], function(){
	Route::get('/', 'SoybeanController@index');
});

Route::resource('transaction', 'TransactionController');
Route::resource('sales', 'SalesController', ['parameters' => ['sales' => 'transaction']]);
Route::resource('sold', 'SoldSoybeanController', ['parameters' => ['sold' => 'detail']]);

Route::group(['prefix' => 'notifications'], function(){
	Route::get('/', 'NotificationController@index');
	Route::get('/{id}', 'NotificationController@show');
});
