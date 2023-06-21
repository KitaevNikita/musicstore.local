<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormController;

Route::view('/', 'index');

Route::resource('forms', FormController::class);

Route::resource('musics', MusicController::class);

Route::resource('categories', CategoryController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('musics', MusicController::class);
    Route::resource('categories', CategoryController::class);
});