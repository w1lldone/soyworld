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
Route::get('/', 'LandingPageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');

Route::group(['prefix' => 'user'], function()
{
	Route::put('/{user}/email', 'UserController@changeEmail');
	Route::put('/{user}/password', 'UserController@changePassword');
	Route::put('/{user}/activate', 'UserActivationController@update');
});

Route::group(['prefix' => 'profile'], function()
{
	Route::get('/', 'ProfileController@index')->name('profile.index');
	Route::get('/edit', 'ProfileController@edit');
	Route::put('/', 'ProfileController@update');
	Route::get('/email', 'ProfileController@editEmail');
	Route::put('/email', 'ProfileController@updateEmail');
	Route::get('/password', 'ProfileController@editPassword');
	Route::put('/password', 'ProfileController@updatePassword');
});

Route::group(['prefix' => 'onfarm'], function()
{
	Route::get('/', 'OnfarmController@index')->name('onfarm.index');
	Route::get('/create', 'OnfarmController@create')->name('onfarm.create');
	Route::post('/', 'OnfarmController@store');
	Route::get('/{onfarm}/view', 'OnfarmController@show')->name('onfarm.show');
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
	Route::get('/{seed}/view', 'SeedController@show')->name('seed.show');
	Route::get('/{seed}/edit', 'SeedController@edit');
	Route::put('/{seed}', 'SeedController@update');
	Route::post('/', 'SeedController@store');
});

Route::group(['prefix' => 'supplier'], function()
{
	Route::post('/', 'SupplierController@store');
	Route::get('/', 'SupplierController@index')->name('supplier.index');
	Route::get('/{supplier}/edit', 'SupplierController@edit');
	Route::get('/create', 'SupplierController@create');
	Route::put('/{supplier}', 'SupplierController@update');
	Route::delete('/{supplier}', 'SupplierController@destroy');
});

Route::group(['prefix' => 'poktan'], function()
{
	Route::get('/', 'PoktanController@index')->name('poktan.index');
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
	Route::put('/{onfarmCost}', 'OnfarmCostController@update');
	Route::get('/{onfarmCost}/view', 'OnfarmCostController@show');
	Route::get('/{onfarmCost}/edit', 'OnfarmCostController@edit');
	Route::delete('/{onfarmCost}', 'OnfarmCostController@destroy');
});

Route::group(['prefix' => 'harvest'], function(){
	Route::get('/', 'HarvestController@index')->name('harvest.index');
	Route::get('/{harvest}/edit/{section}', 'HarvestController@edit');
	Route::get('/create', 'HarvestController@create')->name('harvest.create');
	Route::get('/{harvest}', 'HarvestController@show')->name('harvest.show');
	Route::get('/{harvest}/postharvest', 'PostharvestController@create')->name('postharvest.create');
	Route::put('/{harvest}/postharvest/{postharvest}', 'PostharvestController@update')->name('postharvest.update');
	Route::delete('/{harvest}/postharvest', 'PostharvestController@destroy')->name('postharvest.destroy');
	Route::get('/{harvest}/postharvest/{postharvest}', 'PostharvestController@show')->name('postharvest.show');
	Route::get('/{harvest}/postharvest/{postharvest}/edit', 'PostharvestController@edit')->name('postharvest.edit');
	Route::post('/', 'HarvestController@store');
	// Route::put('/{harvest}/sale', 'HarvestSalesController@update');
	Route::put('/{harvest}/{section}', 'HarvestController@update');
});

Route::group(['prefix' => 'postharvest'], function(){
	Route::post('/', 'PostharvestController@store')->name('postharvest.store');
});

Route::group(['prefix' => 'stock'], function(){
	Route::post('/', 'StockController@store');
});

Route::group(['prefix' => 'soybean'], function(){
	Route::get('/', 'SoybeanController@index');
	Route::get('/harvest/{harvest}', 'SoybeanController@show');
	Route::get('/onfarm/{onfarm}', 'SoybeanController@showOnfarm');
});

Route::resource('transaction', 'TransactionController');
Route::resource('sales', 'SalesController', ['parameters' => ['sales' => 'transaction']]);
Route::resource('sold', 'SoldSoybeanController', ['parameters' => ['sold' => 'detail']]);

Route::group(['prefix' => 'notifications'], function(){
	Route::get('/', 'NotificationController@index');
	Route::get('/{id}', 'NotificationController@show');
});

Route::group(['prefix' => 'price'], function(){
	Route::get('/', 'PriceController@index')->name('price.index');
	Route::post('/', 'PriceController@store');
});

Route::group(['prefix' => 'warehouse'], function(){
	Route::get('/', 'WarehouseController@index')->name('warehouse.index');
});

Route::group(['prefix' => 'handling'], function(){
	Route::post('/', 'HandlingController@store')->name('handling.store');
});

Route::group(['prefix' => 'report'], function(){
	Route::get('/', 'ReportsController@index')->name('report.index');
	Route::group(['prefix' => 'poktan'], function(){
		Route::get('/', 'Report\PoktanReportController@index')->name('report.poktan.index');
		Route::get('/farmer', 'Report\PoktanReportController@farmer')->name('report.poktan.farmer');
		Route::get('/sales', 'Report\PoktanReportController@sales')->name('report.poktan.sales');
		Route::get('/soybean', 'Report\PoktanReportController@soybean')->name('report.poktan.soybean');
	});
});
