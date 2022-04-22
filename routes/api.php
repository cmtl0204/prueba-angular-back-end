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

Route::apiResource('animals', \App\Http\Controllers\AnimalController::class);
Route::apiResource('authors', \App\Http\Controllers\AuthorController::class);
Route::apiResource('books', \App\Http\Controllers\BookController::class);
Route::apiResource('clients', \App\Http\Controllers\ClientController::class);
Route::apiResource('movies', \App\Http\Controllers\MovieController::class);
Route::apiResource('people', \App\Http\Controllers\PersonController::class);
Route::apiResource('positions', \App\Http\Controllers\PositionController::class);
Route::apiResource('zoos', \App\Http\Controllers\ZooController::class);
Route::apiResource('areas', \App\Http\Controllers\AreaController::class);
Route::apiResource('magazines', \App\Http\Controllers\MagazineController::class);
Route::apiResource('modalities', \App\Http\Controllers\ModalityController::class);
Route::apiResource('projects', \App\Http\Controllers\ProjectController::class);
