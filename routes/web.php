<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\CategoryController;

Route::resource('musics', MusicController::class);

Route::resource('categories', CategoryController::class);

