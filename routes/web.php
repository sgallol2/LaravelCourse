<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");


// Orden importante: rutas específicas antes de las dinámicas
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::post('/products', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::delete('/admin/products/{id}/delete','App\Http\Controllers\ProductController@delete')->name("product.delete");
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");
Route::get('/image', 'App\Http\Controllers\ImageController@index')->name("image.index");
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name("image.save");
Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name("imagenotdi.index");
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name("imagenotdi.save");

// Rutas para demonios
Route::get('/demons', 'App\Http\Controllers\DemonController@index')->name("demon.index");
Route::get('/demons/create', 'App\Http\Controllers\DemonController@create')->name('demon.create');
Route::get('/demons/list', 'App\Http\Controllers\DemonController@list')->name("demon.list");
Route::get('/demons/stats', 'App\Http\Controllers\DemonController@stats')->name("demon.stats");
Route::post('/demons', 'App\Http\Controllers\DemonController@save')->name('demon.save');
