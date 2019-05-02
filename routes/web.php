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

Route::get('/', 'WelcomeController@index');

Route::get('/tours/', 'ToursController@index');

Route::get('/tours/{tour}', 'ToursController@show');

Route::get('/checkout/{tour}', 'CheckoutController@index');
Route::get('/orders/{order}', 'OrderController@index');

Route::post('/charge', 'CheckoutController@store');
Route::get('/success', function () {
    return view('success');
});
