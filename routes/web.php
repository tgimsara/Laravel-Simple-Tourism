<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get('/carrers', function(){
    return view('carrers');
});

Route::post('/photos/store', [App\Http\Controllers\photoController::class, 'store'])->name('photos.store');
