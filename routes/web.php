<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PageController@home');

Route::get('contact', 'PageController@contact');

Route::get('products', 'PageController@products');

Route::get('category/{id}', 'PageController@category');

Route::get('product/{id}', 'PageController@product');