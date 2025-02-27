<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Route::get('/', function () {
    return view('pages/home');
});
Route::get('/news', function () {
    return view('pages/news');
});
Route::get('/games', function () {
    return view('pages/games');
});

Route::get('/support', function () {
    return view('pages/support');
});

Route::get('/account', function () {
    return view('pages/account');
});

Route::get('/todos', [NewsController::class, 'index']);
