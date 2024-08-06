<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('post.index');
    }

    public function create() {
        return view('post.create');
    }

    public function show($id) {
        // compact('id'); igual a: ['id' => $id]
        return view('post.show', compact('id'));
    }

    public function getCategoryPost($id, $category) {
        return "This is the post with id: $id and category: $category";
    }

    public function getPostOptional($id, $category, $position = null) {
        if($position) {
            return "This is the post with id: $id, category: $category and position: $position";
        }
        return "This is the post with id: $id and category: $category";
    }
}
