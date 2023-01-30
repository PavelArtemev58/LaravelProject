<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAddController;
use App\Http\Controllers\LoginController;

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


Route::get('/users', [UserController::class, 'show'])->name('users');

Route::post('/authentificator', [LoginController::class, 'authenticate']);

Route::get('/auth', [LoginController::class, 'authForm']);

Route::post('/register', [LoginController::class, 'registrate']);

Route::get('/reg', [LoginController::class, 'loginForm']);

Route::get('/logout', [LoginController::class, 'logout']);