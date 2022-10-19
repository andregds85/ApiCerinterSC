<?php
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ChecklistController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\RelacaoController;



Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);
  

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('checklist', ChecklistController::class); 
    Route::resource('grupos', RoleController::class); 
    Route::resource('papel', RelacaoController::class); 
});






   
