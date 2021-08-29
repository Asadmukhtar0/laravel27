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
Route::get('/','App\Http\Controllers\pagesController@welcome');
Route::get('/spersonal','App\Http\Controllers\pagesController@spersonal')->name('spersonal');
Route::get('/seducational','App\Http\Controllers\pagesController@seducational')->name('seducational');
Route::get('/join','App\Http\Controllers\pagesController@join')->name('join');
Route::post('/save','App\Http\Controllers\pagesController@save')->name('save');
Route::post('/save2','App\Http\Controllers\pagesController@save2')->name('save2');
Route::get('join-table','joinTableController@join');

