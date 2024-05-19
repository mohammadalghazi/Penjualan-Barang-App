<?php

use App\Http\Controllers\AuthorizeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', [AuthorizeController::class, 'signin']);
Route::get('/signup', [AuthorizeController::class, 'signup']);