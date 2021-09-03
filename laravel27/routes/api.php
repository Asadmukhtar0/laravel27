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
Route::get('/list', 'App\Http\Controllers\api\dataController@list');
Route::get('/save', 'App\Http\Controllers\api\dataController@save');
Route::get('/search', 'App\Http\Controllers\api\dataController@search');
