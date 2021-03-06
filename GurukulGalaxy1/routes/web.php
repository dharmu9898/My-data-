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

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// Route::group(['as'=>'institutes.','prefix' => 'institutes','namespace'=>'Institutes','middleware'=>['auth','institutes']], function () {
//     Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// });

// Route::group(['as'=>'student.','prefix' => 'student','namespace'=>'Student','middleware'=>['auth','student']], function () {
//     Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


