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
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Auth::routes();
Route::prefix('arslan')->middleware('auth')->group(function(){
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});