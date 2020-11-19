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
    return redirect()->route('news.index');
});

Auth::routes();
Route::resource('news', \App\Http\Controllers\NewsController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::post('/create/tag/{news}', ['App\Http\Controllers\TagController', 'store'])->name('tag.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
