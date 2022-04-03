<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('todo/import',[\App\Http\Controllers\ToDoController::class, 'importForm'])
    ->name('todo.import.form');

Route::post('todo/import',[\App\Http\Controllers\ToDoController::class, 'import'])
    ->name('todo.import');

Route::get('todo/export',[\App\Http\Controllers\ToDoController::class, 'exportForm'])
    ->name('todo.export.form');

Route::post('todo/export',[\App\Http\Controllers\ToDoController::class, 'export'])
    ->name('todo.export');

