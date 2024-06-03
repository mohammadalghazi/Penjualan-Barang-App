<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('dashboard', function(){
    return view('dashboard.index',[
        'title' => 'Dashboard'
    ]);
});

Route::resource('dashboard/products', ProductController::class);
Route::resource('dashboard/discounts', DiscountController::class);
Route::resource('dashboard/categories', CategoryController::class);
Route::resource('dashboard/sub-categories', SubCategoryController::class);
Route::resource('dashboard/brands', BrandController::class);

Route::get('dashboard/sales', function(){
    return view('dashboard.sales',[
        'title' => 'Sales'
    ]);
});
Route::get('dashboard/billing', function(){
    return view('dashboard.billing',[
        'title' => 'Billing'
    ]);
});

Route::resource('dashboard/orders', OrderController::class);
Route::resource('dashboard/shipments', ShipmentController::class);

Route::resource('dashboard/users', UserController::class);