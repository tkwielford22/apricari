<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/products', function () {
//     return view('products/main');
// });

Route::get('products', 'ProductController@main');

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

Route::get('product/details', 'ProductController@productDetails');
