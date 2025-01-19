<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Rendering pages
Route::get('/', function () {
    return Inertia::render('Welcome');
});
Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');

Route::get('/register', function () {
    return Inertia::render('Register');
});

Route::get('/profile', [FrontController::class, 'GetUserPage'])->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::prefix('v1')->group(function () {


    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);


});
