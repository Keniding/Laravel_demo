<?php

namespace App\Http\Controllers;

use App\Models\Post;

use function Laravel\Prompts\select;

class ApiPostController extends Controller
{
    public function createPost() {
        $post = new Post();
        $post->title = 'LA HIlIAdA';
        $post->content = 'La hiliada es una obra lit...';
        $post->category = 'Literatura';
        $post->save();
        return response()->json([
            'message' => 'Post created successfully',
            'post' => $post
        ], 201);
    }

    public function getAllPost() {
        $posts = Post::all(); //::get();
        return response()->json([
            'message' => 'GET ALL Posts successfully',
            'post' => $posts
        ], 201);
    }

    public function searchPostId($id) {
        $post = Post::find($id);
        return response()->json([
            'message' => 'GET Post successfully',
            'post' => $post
        ], 201);
    }

    public function updatePostForId($id) {
        $post = Post::find($id);
        $post->title = 'La Hiliada 2';
        $post->content = 'La hiliada es una obra lit... 2';
        $post->category = 'Literatura 2';
        $post->save();
        return response()->json([
            'message' => 'Post update successfully',
            'post' => $post
        ], 201);
    }

    public function updatePostForIdMayorAt($id) {
        $post = Post::where('id', '>=', $id)->get();
        return response()->json([
            'message' => 'Post id >= {$post->id} update successfully',
            'post' => $post
        ], 201);
    }

    public function updatePostForCreateAt($created) {
        $post = Post::where('created_at', $created)->first();
        $post->title = 'La Hiliada 3';
        $post->content = 'La hiliada es una obra lit... 3';
        $post->category = 'Literatura 3';
        $post->save();
        return response()->json([
            'message' => 'Post update successfully',
            'post' => $post
        ], 201);

    }

    public function orderById() {
        $posts = Post::orderBy('id', 'desc')->get();
        return response()->json([
            'message' => 'ORDER ALL Posts successfully',
            'post' => $posts
        ], 201);
    }

    public function getTitles() {
        $post = Post::orderBy('id', 'asc')->select('id', 'title', 'category')->get();
        return response()->json([
            'message' => 'ORDER ALL Posts successfully',
            'post' => $post
        ], 201);
    }

    public function takeNPost($n) {
        $post = Post::take($n)->get();
        return response()->json([
            'message' => 'TAKE N Posts successfully',
            'post' => $post
        ], 201);
    }

    public function deletePost($id) {
        $post = Post::find($id);
        $respose = $post;
        $post->delete();
        return response()->json([
            'message' => 'Delete Posts successfully',
            'post' => $respose
        ], 201);
    }
}
