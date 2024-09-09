<?php

use App\Http\Controllers\ProfileController;
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

<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
=======
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
>>>>>>> 4bea2b12205abd1c30ba3314f7786a415d8267fe
