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

Route::get('/barang/all','BarangController@index');
Route::get('/barang/add','BarangController@add');
Route::post('/barang/save','BarangController@save');
Route::get('/barang/edit/{id}','BarangController@edit');
Route::post('/barang/update','BarangController@update');
Route::get('/barang/delete/{id}','BarangController@delete');

Route::get('/pembeli/all','pembeliController@index');
Route::get('/pembeli/add','pembeliController@add');
Route::post('/pembeli/save','pembeliController@save');
Route::get('/pembeli/edit/{id}','pembeliController@edit');
Route::post('/pembeli/update','pembeliController@update');
Route::get('/pembeli/delete/{id}','pembeliController@delete');

Route::get('/transaksi/all','TransaksiController@index');
Route::get('/transaksi/add','TransaksiController@add');
Route::post('/transaksi/save','TransaksiController@save');