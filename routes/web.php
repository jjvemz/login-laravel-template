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
});
Route::get('/register', function () {
    return Inertia::render('Register');
});

//Render page when logged in
Route::get('/profile', [FrontController::class, 'GetUserPage'])->middleware('auth');

//Logged out only for the profile page
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::prefix('v1')->group(function () {


    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);


});
