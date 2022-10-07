<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\API\AuthController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);

/*
Route::apiResource('livros', LivroController::class);
*/ 

Route::middleware('auth:sanctum')->group( function () {
    Route::apiResource('livros', LivroController::class);
});
