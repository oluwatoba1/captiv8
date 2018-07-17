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
    return view('index');
});

Route::get('single', function() {
	return view('single');
});

Auth::routes();

Route::get('dashboard', 'HomeController@index')->name('dashboard');

Route::get('categories/{category}', 'CategoriesController@index');

Route::resource('products', 'ProductsController');

Route::get('cart', 'CartsController@index');
Route::get('cart/{product}', 'CartsController@add');
Route::put('cart/{rowId}', 'CartsController@update')->name('cart.update');
Route::delete('cart/{rowId}', 'CartsController@delete')->name('cart.delete');

Route::get('checkout', 'CheckoutController@allowcheckout');

//This is for the frontend home. That's why I separated it
Route::get('customer-login', 'CustomerController@login');
Route::get('customer-register', 'CustomerController@register');

Route::get('/billboard', function(){
	return view('billboard.py');
});

