<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('home');
})->middleware('auth');

route::get('/register', [Authcontroller::class, 'showRegister']);
route::post('/register', [Authcontroller::class, 'register']);

route::get('/login', [Authcontroller::class, 'showLogin'])->name('login')->middleware('guest');
route::post('/login', [Authcontroller::class, 'login']) ;

