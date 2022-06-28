<?php

use Illuminate\Support\Facades\Route;

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

Route::get("home","htmlController@home");
Route::get("about","htmlController@about");
Route::get("portfolio","htmlController@portfolio");
Route::get("features","htmlController@features");
Route::get("features","htmlController@features");
Route::get("contact","htmlController@contact");

route::get("services","homeController@services");
route::get("products","homeController@products");
route::get("team","homeController@team");
Route::get("index","homeController@index");
