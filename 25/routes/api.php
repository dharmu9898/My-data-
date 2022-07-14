<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'qa/url'
], function () {
	Route::group(['middleware' => 'auth', 'middleware' => 'client_credentials'], function(){


        Route::post('create', 'Api\MyQaController@store')->name('myqa.store');

    });
});
