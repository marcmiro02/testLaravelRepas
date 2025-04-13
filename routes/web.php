<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
Route::get('/create_task', [TasksController::class, 'create'])->name('tasks.create');
Route::post('/store_task', [TasksController::class, 'store'])->name('tasks.store');
Route::get('/edit_task/{id}', [TasksController::class, 'edit'])->name('tasks.edit');
