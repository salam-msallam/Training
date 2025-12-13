<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users',[ UserController::class,'index'])->name('user.index');
Route::get('/users/create',[ UserController::class,'create'])->name('user.create');
Route::post('/users/store',[ UserController::class,'store'])->name('user.store');
