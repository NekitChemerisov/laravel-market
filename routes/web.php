<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\CardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::middleware('guest')->namespace('\App\Http\Controllers')->group(function() {
	Route::post('/login', [AuthController::class, 'postSignin']);
});

Route::get('/reg', function () {
    return view('reg');
});

Route::post('/reg', [AuthController::class, 'postReg']);

Route::get('/shop', [CategoryController::class, 'index']);

Route::get('/categories/{id}', [ProductController::class, 'show'])->name('categories.show');

Route::resource('/admin', CrudController::class);

//Route::resource('/card', CrudController::class);

Route::get('/card.index', [CardController::class, 'index']);




