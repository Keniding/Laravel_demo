<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return "Hello world. Welcome to my page";
});

Route::get('/posts', function () {
    return "This is the posts page";
});

Route::get('post/create', function() {
    return "This is the create post page";
});

Route::get('/post/{id}', function($id) {
    return "This is the post with id: $id";
});

Route::get('/post/{post}/{category}', function($post, $category) {
    return "This is the post with id: $post and category: $category";
});

Route::get('/postOpcional/{post}/{category}/{position?}', function($post, $category, $position = null) {
    if ($position) {
        return "This is the post with id: $post and category: $category and position: $position";
    }
    return "This is the post with id: $post and category: $category";
});

Route::post('/post', function () {
    return "Enviar post";
});
