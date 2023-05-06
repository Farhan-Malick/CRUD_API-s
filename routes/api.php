<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('user', [App\Http\Controllers\UserController::class, 'index']);
Route::get('showUser/{id}', [App\Http\Controllers\UserController::class, 'show']);
Route::post('insertUser', [App\Http\Controllers\UserController::class, 'insert']);
Route::post('storeUser', [App\Http\Controllers\UserController::class, 'store']);
Route::put('updateUser/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('destroyUser/{id}', [App\Http\Controllers\UserController::class, 'destroy']);
