<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dash', 'namespace' => 'Dash'], function () {
    Route::get('page/json', 'PageController@json');
    Route::resource('page', 'PageController');
    Route::get('user/json', 'PageController@json');
    Route::resource('user', 'PageController');
});
