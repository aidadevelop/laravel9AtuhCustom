<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;

Route::middleware('auth:sanctum')->group( function () {
    Route::get('test', function(){ return 'Проверка работы регистрации'; });
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
