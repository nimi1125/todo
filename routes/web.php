<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');
Route::delete('/todo/destroy/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');
Route::get('/todo/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::post('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update');