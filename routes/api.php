<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::middleware('auth:sanctum')
//    ->get('students', [\App\Http\Controllers\StudentController::class, 'index']);

Route::get('students', [\App\Http\Controllers\StudentController::class, 'index']);

//Route::middleware('auth:sanctum')
//    ->post('students', [\App\Http\Controllers\StudentController::class, 'store']);

Route::post('students', [\App\Http\Controllers\StudentController::class, 'store']);

Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')
    ->get('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
