<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('dashboard', function(){
    return view('dashboard.index');
});

Route::get('dashboard/tables', function(){
    return view('dashboard.tables');
});

Route::get('dashboard/billing', function(){
    return view('dashboard.billing');
});

Route::get('dashboard/virtual-reality', function(){
    return view('dashboard.virtual-reality');
});

Route::get('dashboard/rtl', function(){
    return view('dashboard.rtl');
});

Route::get('profile', function(){
    return view('profile');
});


Route::get('signin', function(){
    return view('authorize.signin');
});