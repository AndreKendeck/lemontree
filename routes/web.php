<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPriceController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => inertia('Index'));
Route::resources([
    'clients' => ClientController::class,
    'products' => ProductController::class, 
    'products.prices' => ProductPriceController::class,
    'purchase_orders' => PurchaseOrderController::class,
    'users' => UserController::class
]);
