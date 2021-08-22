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

Route::get('/', 'App\Http\Controllers\pageController@home')->name('home');
Route::post('/save', 'App\Http\Controllers\pageController@save')->name('save');
Route::get('/delete/{id}','App\Http\Controllers\pageController@delete')->name('delete');
Route::get('/edit/{id}','App\Http\Controllers\pageController@edit')->name('edit');
Route::get('/about','App\Http\Controllers\pageController@about')->name('about');
Route::get('/contact','App\Http\Controllers\pageController@contact')->name('contact');
