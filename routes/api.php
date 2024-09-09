<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/to_do_lists', [ToDoListsController::class, 'index']);
Route::post('/to_do_lists', [ToDoListsController::class, 'store']);
Route::get('/to_do_lists/{id}', [ToDoListsController::class, 'show']);
Route::put('/to_do_lists/{id}', [ToDoListsController::class, 'update']);
Route::delete('/to_do_lists/{id}', [ToDoListsController::class, 'destroy']);
