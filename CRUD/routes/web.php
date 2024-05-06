<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('add-task',[TaskController::class,'create']);

Route::post('add-task',[TaskController::class,'store']);

Route::get('show-tasks', [TaskController::class, 'display']);

Route::get('delete-task/{id}', [TaskController::class, 'destroy']);

Route::get('edit-task/{id}', [TaskController::class, 'edit']);

Route::put('update-task/{id}', [TaskController::class, 'update']);



