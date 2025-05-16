<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
Route::get('/', function () {
    return view('todos.home');
});


Route::resource('todos', ToDoController::class);






//
Route::get('/account', [RegisterController::class, "create"])->name('signUp')->middleware("guest");
Route::post('/account', [RegisterController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/login', [SessionController::class, "show"])->name('login')->middleware("guest");
Route::post('/login', [SessionController::class, "create"])->middleware("guest");
