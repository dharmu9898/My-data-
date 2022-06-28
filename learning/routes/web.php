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

Route::get("select","ProductController@selectmodel");

Route::get("orm", "ProductController@insertorm");

Route::get("index","DharmuController@index");

Route::get("queryrun","testController@queryrun");

Route::get("Conditional","TestController@conditional");

Route::get("home","HtmlController@home");
Route::get("about","HtmlController@about");
Route::get("portfolio","HtmlController@portfolio");
Route::get("features","HtmlController@features");
Route::get("contact","HtmlController@contact");

// Route::get("home","HomeController@index");
Route::get("call","HomeController@call");
Route::get("test","TestController@aboutus");
Route::get("services","HomeController@services");
Route::get("products","HomeController@products");
Route::get("team","HomeController@team");
