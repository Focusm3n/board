<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [BbsController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');
