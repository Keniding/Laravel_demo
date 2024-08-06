<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class);
Route::get('/laravel', [HomeController::class, 'indexLaravel']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post', [PostController::class, 'create']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::get('/post/{id}/{category}', [PostController::class, 'getCategoryPost']);
Route::get('/post/{id}/{category}/{position}', [PostController::class, 'getPostOptional']);
Route::post('/post', [PostController::class, 'postCreate']);
