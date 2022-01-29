<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

use App\Http\Controllers\GoogleController;
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
Route::get('/', [MainController::class,'home']);
Route::get('/home', [MainController::class,'home']);
Route::get('/about', [MainController::class,'about']);
Route::get('/loc', [MainController::class,'loc']);
Route::get('/wishes', [MainController::class,'wishes'])->name('wishes');
Route::post('/wishes_', [MainController::class,'wishes_']);

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
