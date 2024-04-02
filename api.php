<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
 
   // 'middleware' => 'auth:api',
    'prefix' => 'auth',
  // 'middleware' => ['role_or_permission:Super-Admin|publish articles'],
 
], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->name('me');
    Route::post('/list', [AuthController::class, 'list']);
    Route::post('/reg', [AuthController::class, 'reg']);

});

