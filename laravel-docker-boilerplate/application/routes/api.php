<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Store
Route::get('/stores', 'StoreController@index')->name('stores.all');
Route::get('/stores/{store}', 'StoreController@show')->name('stores.show');
Route::post('/stores', 'StoreController@store')->name('stores.store');
Route::put('/stores/{id}', 'StoreController@update')->name('stores.update');

// Floors per store
Route::get('/stores/{store}/floors/', 'StoreController@allFloors')->name('stores.allFloors');

// Floor
Route::get('/floors', 'FloorController@index')->name('floors.all');
Route::get('/floors/{floor}', 'FloorController@show')->name('floors.show');
Route::post('/floors', 'FloorController@store')->name('floors.store');
Route::put('/floors/{id}', 'FloorController@update')->name('floors.update');

// Universes per floor
Route::get('/floors/{floor}/universes/', 'FloorController@allUniverses')->name('floors.allUniverses');

// Univers
Route::get('/universes', 'UniverseController@index')->name('universes.all');
Route::get('/universes/{universe}', 'UniverseController@show')->name('universes.show');
Route::post('/universes', 'UniverseController@store')->name('universes.store');
Route::put('/universes/{id}', 'UniverseController@update')->name('universes.update');

// Booths per universe
Route::get('/universes/{universe}/booths/', 'UniverseController@allBooths')->name('universes.allBooths');

// Booth
Route::get('/booths', 'BoothController@index')->name('booths.all');
Route::get('/booths/{booth}', 'BoothController@show')->name('booths.show');
Route::post('/booths', 'BoothController@store')->name('booths.store');
Route::put('/booths/{id}', 'BoothController@update')->name('booths.update');

// Booth levels per universe
Route::get('/booths/{booth}/levels/', 'BoothController@allLevels')->name('booths.allLevels');

// Booth Level
Route::get('/booth_levels', 'BoothLevelController@index')->name('boothLevels.all');
Route::get('/booth_levels/{boothLevel}', 'BoothLevelController@show')->name('boothLevels.show');
Route::post('/booth_levels', 'BoothLevelController@store')->name('boothLevels.store');
Route::put('/booth_levels/{id}', 'BoothLevelController@update')->name('boothLevels.update');

// Configurations per level
Route::get('/booth_levels/{boothLevel}/configurations', 'BoothLevelController@allConfigurations')->name('boothLevels.allConfigurations');

// Product
Route::get('/products', 'ProductController@index')->name('products.all');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::put('/products/{id}', 'ProductController@update')->name('products.update');

// Configuration
Route::get('/configurations', 'ConfigurationController@index')->name('configurations.all');
Route::get('/configurations/{configuration}', 'ConfigurationController@show')->name('configurations.show');
Route::post('/configurations', 'ConfigurationController@store')->name('configurations.store');
Route::put('/configurations/{id}', 'ConfigurationController@update')->name('configurations.update');

// Rating
Route::get('/ratings', 'RatingController@index')->name('ratings.all');
Route::get('/ratings/{rating}', 'RatingController@show')->name('ratings.show');
Route::post('/ratings', 'RatingController@store')->name('ratings.store');
Route::put('/ratings/{id}', 'RatingController@update')->name('ratings.update');

// Basket
Route::get('/baskets', 'BasketController@index')->name('baskets.all');
Route::get('/baskets/{basket}', 'BasketController@show')->name('baskets.show');
Route::post('/baskets', 'BasketController@store')->name('baskets.store');
Route::put('/baskets/{id}', 'BasketController@update')->name('baskets.update');

// Basket Product
Route::get('/basket_products', 'BasketProductController@index')->name('basketProducts.all');
Route::get('/basket_products/{basketProducts}', 'BasketProductController@show')->name('basketProducts.show');
Route::post('/basket_products', 'BasketProductController@store')->name('basketProducts.store');
Route::put('/basket_products/{id}', 'BasketProductController@update')->name('basketProducts.update');


