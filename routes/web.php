<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
});
Route::get('/why', function () {
    return view('pages/why');
});

