<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//routess

Route::get('/home',[PostController::class,'home'])->name('home.home');
// Route::get('/home/create',[PostController::class,'create'])->name('home.create');
// Route::post('/home/store',[PostController::class,'store']);

Route::get('/home/create', [PostController::class, 'create'])->name('home.create');
Route::post('/home/store',[PostController::class,'store'])->name('home.store');
Route::get('/home/views',[PostController::class,'views'])->name('home.views');

