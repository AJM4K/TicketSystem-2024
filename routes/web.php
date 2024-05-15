<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TestDataController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/data', [TestDataController::class, 'index']);
Route::get('/data/{id}', [TestDataController::class, 'show']);
Route::post('/data', [TestDataController::class, 'store']);
Route::put('/data/{id}', [TestDataController::class, 'update']);
Route::delete('/data/{id}', [TestDataController::class, 'destroy']);

