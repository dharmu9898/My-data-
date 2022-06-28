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

Route::group(['as'=>'institute.','prefix' => 'institute','namespace'=>'Institute','middleware'=>['auth','institute']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'student.','prefix' => 'student','namespace'=>'Student','middleware'=>['auth','student']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
