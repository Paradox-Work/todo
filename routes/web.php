<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


Route::get('/', function () {
    return view('pages/home');
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/pages/{news_id}', [NewsController::class, 'show']);


Route::get('/games', function () {
    return view('pages/games');
});

Route::get('/support', function () {
    return view('pages/support');
});

Route::get('/account', function () {
    return view('pages/account');
});

Route::get('/', [NewsController::class, 'index']);
//
Route::get('/account', [RegisterController::class, "create"])->middleware("guest");
Route::post('/account', [RegisterController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy'])->middleware("auth");

Route::post('/login', [SessionController::class, "create"])->name("login")->middleware("guest");
Route::get('/login', [SessionController::class, "show"])->middleware("guest");