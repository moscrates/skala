<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicBookController;
use App\Http\Controllers\MyBookController;

Route::post('/auth/token', [AuthController::class, 'token']);

Route::get('/books', [PublicBookController::class, 'index']);
Route::get('/books/{id}', [PublicBookController::class, 'show']);

/*
Route::middleware('auth:api')->prefix('me')->group(function () {
    Route::get('/books', [MyBookController::class, 'index']);
    Route::post('/books', [MyBookController::class, 'store']);
    Route::patch('/books/{id}', [MyBookController::class, 'update']);
    Route::delete('/books/{id}', [MyBookController::class, 'destroy']);
});
*/
