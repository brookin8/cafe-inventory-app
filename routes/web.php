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
    return redirect('/login');
});

//Route::get('/register','UserController@create');

Route::resource('users','UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/items/addstore','ItemsController@addstore');

Route::post('/items/removestore','ItemsController@removestore');

Route::resource('items', 'ItemsController');

Route::get('/suppliers/details/{id}','SupplierController@details');

Route::resource('suppliers', 'SupplierController');

Route::post('/invoices/createfromorders','InvoiceController@fromorderpage');

Route::get('/orders/supplierselect', 'OrderController@supplierselect');

Route::post('/orders/supplierselect', 'OrderController@supplierselected');

Route::get('/orders/open', 'OrderController@open');

Route::get('/orders/saved', 'OrderController@saved');

Route::get('/orders/closed', 'OrderController@closed');

Route::resource('orders', 'OrderController');

Route::post('/invoices/create', 'InvoiceController@directinvoice');

Route::get('/invoices/orderexists', 'InvoiceController@orderexist');

Route::post('/invoices/orderexists', 'InvoiceController@orderexisted');

Route::get('/invoices/supplierselect', 'InvoiceController@supplierselect');

Route::post('/invoices/supplierselect', 'InvoiceController@supplierselected');

Route::get('/invoices/orderselect', 'InvoiceController@orderselect');

Route::post('/invoices/orderselect', 'InvoiceController@orderselected');

Route::get('/invoices/backorder', 'InvoiceController@backorder');

Route::resource('invoices', 'InvoiceController');

Route::get('/inventorycounts/supplierselect', 'CountController@supplierselect');

Route::post('/inventorycounts/supplierselect', 'CountController@supplierselected');

Route::get('/inventorycounts/saved', 'CountController@saved');

Route::resource('inventorycounts', 'CountController');

Route::get('/reporting/details', 'ReportingController@details');

Route::resource('reporting', 'ReportingController');

Route::post('/reporting/details/filter','ReportingController@detailsfilter');
