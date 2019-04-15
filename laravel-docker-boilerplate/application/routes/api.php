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

// Floor
Route::get('/floors', 'FloorController@index')->name('floors.all');
Route::get('/floors/{floor}', 'FloorController@show')->name('floors.show');

// Univers
Route::get('/universes', 'UniverseController@index')->name('universes.all');
Route::get('/universes/{universe}', 'UniverseController@show')->name('universes.show');

// Booth
Route::get('/booths', 'BoothController@index')->name('booths.all');
Route::get('/booths/{booth}', 'BoothController@show')->name('booths.show');

// Booth Level
Route::get('/booth_levels', 'BoothLevelController@index')->name('boothLevels.all');
Route::get('/booth_levels/{boothLevel}', 'BoothLevelController@show')->name('boothLevels.show');

// Product
Route::get('/products', 'ProductController@index')->name('products.all');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');

// Configuration
Route::get('/configurations', 'ConfigurationController@index')->name('configurations.all');
Route::get('/configurations/{configuration}', 'ConfigurationController@show')->name('configurations.show');

// Rating
Route::get('/ratings', 'RatingController@index')->name('ratings.all');
Route::get('/ratings/{rating}', 'RatingController@show')->name('ratings.show');

// Basket
Route::get('/baskets', 'BasketController@index')->name('baskets.all');
Route::get('/baskets/{basket}', 'BasketController@show')->name('baskets.show');

// Basket Product
Route::get('/basket_products', 'BasketProductController@index')->name('basketProducts.all');
Route::get('/basket_products/{basketProducts}', 'BasketProductController@show')->name('basketProducts.show');


