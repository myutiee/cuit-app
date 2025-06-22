<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CuitController;


Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
    return view('login');
    })->name('login');

    Route::get('/register', function () {
    return view('register');
    })->name('register');

    Route::get('/', function () {
    return view('home');
    })->middleware('auth');

    route::post('/register', [Authcontroller::class, 'register']);
    route::post('/login', [Authcontroller::class, 'login']) ;
});

Route::middleware('auth')->group(function () {

Route::get('/', [CuitController::class, 'index'])->middleware('auth')->name('home');
route::post('/logout', [Authcontroller::class, 'logout'])->name('logout')->middleware('auth');
route::post('/post', [Authcontroller::class, 'post'])->name('cuit.post')->middleware('auth');

});