<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ComboItemController;
use App\Http\Controllers\Api\InfoController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('infos', InfoController::class);

Route::apiResource('categories', CategoryController::class);

Route::apiResource('products', ProductController::class);

Route::apiResource('combo-items', ComboItemController::class);
