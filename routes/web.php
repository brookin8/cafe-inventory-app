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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('items', 'ItemsController');

Route::resource('suppliers', 'SupplierController');

Route::get('/orders', function() {
	return view('orders.index');
});

Route::get('/reporting', function() {
	return view('reporting.index');
});

Route::get('/inventorycounts', function() {
	return view('inventorycounts.index');
});

Route::get('/invoices', function() {
	return view('invoices.index');
});
