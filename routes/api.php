<?php

use App\Http\Controllers\Api\EnumController;
use App\Http\Controllers\Api\PurchaseOrderProductController;
use Illuminate\Support\Facades\Route;



Route::apiResource('purchaseOrderProductId', PurchaseOrderProductController::class);
Route::get('/enum/{type}', EnumController::class);
