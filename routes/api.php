<?php

use App\Http\Controllers\TodoController;
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

Route::get('todo', [TodoController::class, 'index']);
Route::post('todo', [TodoController::class, 'store']);
Route::put('todo', [TodoController::class, 'update']);
Route::delete('todo/{id}', [TodoController::class, 'destroy']);
Route::get('todo/{id}', [TodoController::class, 'show']);
