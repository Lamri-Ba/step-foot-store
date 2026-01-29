<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


// main page route
Route::get('/', function () {
    return view('index');
});
// product page rout 
Route::get('/products', [ProductController::class, 'index'])
    ->name('products');



// route for auth
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');