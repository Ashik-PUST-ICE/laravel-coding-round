<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\TaskController;

Route::post('/posts', [PostController::class, 'postStore']);
Route::get('/posts', [PostController::class, 'postIndex']);
Route::get('/posts/{id}', [PostController::class, 'postShow']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);

Route::post('/tasks', [TaskController::class, 'taskStore']);
Route::put('/tasks/{id}', [TaskController::class, 'taskUpdate']);
Route::get('/tasks/pending', [TaskController::class, 'taskPending']);

Route::get('/users/{id}', [UserController::class, 'Usershow']);
