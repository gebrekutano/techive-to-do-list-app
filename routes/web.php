<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'to_do_lists',
], function () {
    Route::get('/', [ToDoListsController::class, 'index'])
         ->name('to_do_lists.to_do_list.index');
    Route::get('/create', [ToDoListsController::class, 'create'])
         ->name('to_do_lists.to_do_list.create');
    Route::get('/show/{toDoList}',[ToDoListsController::class, 'show'])
         ->name('to_do_lists.to_do_list.show')->where('id', '[0-9]+');
    Route::get('/{toDoList}/edit',[ToDoListsController::class, 'edit'])
         ->name('to_do_lists.to_do_list.edit')->where('id', '[0-9]+');
    Route::post('/', [ToDoListsController::class, 'store'])
         ->name('to_do_lists.to_do_list.store');
    Route::put('to_do_list/{toDoList}', [ToDoListsController::class, 'update'])
         ->name('to_do_lists.to_do_list.update')->where('id', '[0-9]+');
    Route::delete('/to_do_list/{toDoList}',[ToDoListsController::class, 'destroy'])
         ->name('to_do_lists.to_do_list.destroy')->where('id', '[0-9]+');
});
