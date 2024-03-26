<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login'])->name('user.login');
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::post('register', [AuthController::class, 'register']);
});
