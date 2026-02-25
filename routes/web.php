<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");


// Orden importante: rutas específicas antes de las dinámicas
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::post('/products', 'App\Http\Controllers\ProductController@save')->name('product.save');
