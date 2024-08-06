<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return "This is the posts page";
    }

    public function create() {
        return "This is the create post page";
    }

    public function getPost($id) {
        return "This is the post with id: $id";
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
