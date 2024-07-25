<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;



Route::get('/', [TodosController::class, 'index'])->name("todo.home");

Route::get('/create', function () {
    return view('create');
})->name("todo.create");

Route::get('/update/{id}', [TodosController::class, 'update'])->name("todo.update");

// create todo route
Route::post('/create', [TodosController::class, 'store'])->name("todo.store");

//delete todo
Route::get('/delete/{id}', [TodosController::class, 'delete'])->name("todo.delete");

// update todo route
Route::post('/updatedata', [TodosController::class, 'updatedata'])->name("todo.updatedata");


