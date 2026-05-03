<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks',[App\Http\Controllers\TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/create',[App\Http\Controllers\TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks',[App\Http\Controllers\TaskController::class,'store'])->name('tasks.store');
Route::delete('/tasks/{task}',[App\Http\Controllers\TaskController::class,'destroy'])->name('tasks.destroy');
