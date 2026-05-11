<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware(['auth:sanctum', 'CompanyMiddleware'])->group(function () {

Route::post('/items', [ItemController::class, 'store']);

});
//---------------------------------------------------------------
Route::middleware(['auth:sanctum', 'AdminMiddleware'])->group(function () {

Route::post('/admin/accept-item', [AdminController::class, 'acceptItem']);
Route::post('/admin/reject-item', [AdminController::class, 'rejectItem']);

});

