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

Route::get('index', 'DharmuController@index')->name('index');
Route::get('create', 'DharmuController@create')->name('create');
Route::post('store', 'DharmuController@store')->name('store');
Route::get('edit/{id}','DharmuController@edit')->name('edit');
Route::get('show/{id}','DharmuController@show')->name('show');
Route::post('update/{id}','DharmuController@update')->name('update');
Route::get('destroy/{id}','DharmuController@destroy')->name('destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
