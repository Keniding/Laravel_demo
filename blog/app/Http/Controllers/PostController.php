<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // $posts = Post::all();
        $posts = Post::orderBy('id', 'desc')->get();
        return view('post.index', compact('posts'));
    }

    public function indexPrueba() {
        return view('post.indexPrueba');
    }

    public function show($id) {
        // compact('id'); igual a: ['id' => $id]

        $post = Post::find($id);
        return view('post.show', compact('id', 'post'));
    }

    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category = $request->input('category');
        $post->save();
        // return $request->all();
        return redirect('posts');

        // $post = new Post();
        // $post->title = request('title');
        // $post->content = request('content');
        // $post->category = request('category');
        // $post->save();
    }

    public function update($id) {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function postUpdate(Request $request, $post) {
        $post = Post::find($post);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category = $request->input('category');
        $post->is_active = $request->input('is_active');
        $post->published_at = $request->input('published_at');
        $post->save();
        return redirect("post/$post->id");
    }

    public function postDelete($post) {
        $post = Post::find($post);
        $post->delete();
        return redirect('posts');
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
