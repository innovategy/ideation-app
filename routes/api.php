<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//group of routes for the api that are not protected
Route::group(['prefix' => 'v1', 'namespace' => 'IdeationApp\Http\Controllers'], function () {

    Route::get('/logic', 'LogicController@index');

    Route::get('/', function () {
        return response()->json([
            'message' => 'Welcome to the IdeationApp API version 1',
        ]);
    });

});





