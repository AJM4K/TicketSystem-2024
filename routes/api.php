<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TestDataController;


Route::get('/data', [TestDataController::class, 'index']);
Route::get('/data/{id}', [TestDataController::class, 'show']);
Route::post('/data', [TestDataController::class, 'store']);
Route::put('/data/{id}', [TestDataController::class, 'update']);
Route::delete('/data/{id}', [TestDataController::class, 'destroy']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
