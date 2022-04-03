<?php

use App\Http\Controllers\Api\ToDoController;
use App\Http\Controllers\Api\MetricController;
use Illuminate\Support\Facades\Route;

Route::apiResource('todos', ToDoController::class);
Route::patch('todos/{todo}/toggle', [ToDoController::class, 'toggle']);
Route::get('todo/metrics', [MetricController::class,'index']);
