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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [

    'uses' => 'HomeController@index',
    'as' => 'home',

]);

Route::get('/product/single/{id}', [

    'uses' => 'FrontendController@index',
    'as' => 'product.single',

]);

Route::get('/cart', [

    'uses' => 'ShoppingCartController@index',
    'as' => 'cart',

]);

Route::post('/cart/add', [

    'uses' => 'ShoppingCartController@add_to_cart',
    'as' => 'cart.add',

]);


Route::get('/cart/increment/{rowId}/{qty}', [

    'uses' => 'ShoppingCartController@inc',
    'as' => 'cart.inc',

]);


Route::get('/cart/decrement/{rowId}/{qty}', [

    'uses' => 'ShoppingCartController@dec',
    'as' => 'cart.dec',

]);


Route::get('/cart/delete/{rowId}', [

    'uses' => 'ShoppingCartController@delete',
    'as' => 'cart.delete',

]);

Route::get('/cart/rapid/{id}', [

    'uses' => 'ShoppingCartController@rapid',
    'as' => 'cart.rapid',

]);

Route::get('/cart/checkout', [

    'uses' => 'CheckoutController@index',
    'as' => 'cart.checkout.index',

]);

Route::post('/cart/checkout', [

    'uses' => 'CheckoutController@pay',
    'as' => 'cart.checkout',

]);


Route::resource('/product', 'ProductsController');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');