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

Route::get('/stores', 'StoreController@index')->name('stores.all');
Route::get('/stores/{store}', 'StoreController@show')->name('stores.show');

Route::get('/floors', 'FloorController@index')->name('floors.all');
Route::get('/floors/{floor}', 'FloorController@show')->name('floors.show');

Route::get('/universes', 'UniverseController@index')->name('universes.all');
Route::get('/universes/{universe}', 'UniverseController@show')->name('universes.show');

Route::get('/booths', 'BoothController@index')->name('booths.all');
Route::get('/booths/{booth}', 'BoothController@show')->name('booths.show');

Route::get('/booth_levels', 'BoothLevelController@index')->name('boothLevels.all');
Route::get('/booth_levels/{boothLevel}', 'BoothLevelController@show')->name('boothLevels.show');

Route::get('/products', 'ProductController@index')->name('products.all');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');

Route::get('/configurations', 'ConfigurationController@index')->name('configurations.all');
Route::get('/configurations/{configuration}', 'ConfigurationController@show')->name('configurations.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
