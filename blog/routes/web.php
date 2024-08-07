<?php

use App\Http\Controllers\ApiPostController;
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

Route::get('/api/setPostApi', [ApiPostController::class, 'createPost']);
Route::get('/api/getAllPost', [ApiPostController::class, 'getAllPost']);
Route::get('/api/searchPostId/{id}', [ApiPostController::class, 'searchPostId']);
Route::get('/api/updatePostForId/{id}', [ApiPostController::class, 'updatePostForId']);
Route::get('/api/updatePostForCreateAt/{created}', [ApiPostController::class, 'updatePostForCreateAt']);
Route::get('/api/updatePostForIdMayorAt/{id}', [ApiPostController::class, 'updatePostForIdMayorAt']);
Route::get('/api/orderById', [ApiPostController::class, 'orderById']);
Route::get('/api/getTitles', [ApiPostController::class, 'getTitles']);
Route::get('/api/takeNPost/{n}', [ApiPostController::class, 'takeNPost']);
Route::get('/api/deletePost/{id}', [ApiPostController::class, 'deletePost']);


// Route::get('/prueba', function() {
//     ///return 'Hola mundo';
//     /*
//     // create
//         $post = new Post;
//         $post->title = 'Titulo Prueba';
//         $post->content = 'Contenido Prueba';
//         $post->category = 'Category Prueba';
//         $post->save();
//     */


//     // buscar por category y encuentra el primero
//     /*
//     $post = Post::where('category', "Category Prueba")
//         ->first();
//         return $post;
//     */

//     // buscar y update for id
//     $post = Post::find(1);
//     $post->title = 'Nuevo Titulo Prueba';
//     $post->save();
//     return $post;
// });
