<?php

use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stock', [StockController::class, 'index']);
Route::get('/stock/create', [StockController::class, 'create']);
Route::post('/stock', [StockController::class, 'store']);
Route::get('/stock/{id}', [StockController::class, 'show']);
Route::get('/stock/{id}/edit', [StockController::class, 'edit']);
Route::put('/stock/{id}', [StockController::class, 'update']);
Route::delete('/stock/{id}', [StockController::class, 'destroy']);
