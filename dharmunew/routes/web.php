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

Route::get("edit","DkController@edit");

Route::get("conditional","DkController@conditional");

Route::get("Dk","DkController@index");
// route::get("create","DkController@create");

Route::get("/create",function(){
    return view("newview");
});

Route::get("store","DkController@store");