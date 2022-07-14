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



Route::get("dharmu","CrudController@index")->name("dashboard");
Route::get("create","CrudController@create")->name("create");
Route::post("store","CrudController@store")->name("store");
Route::get("edit/{id}","CrudController@edit")->name("edit");
Route::post("update/{id}","CrudController@update")->name("update");
Route::get("show/{id}","CrudController@show")->name("show");
Route::get("destroy/{id}","CrudController@destroy")->name("destroy");
Route::get('crud/index/welcome_manualfilter','CrudController@fetch_concern_data')->name("fetch_concern_data");
