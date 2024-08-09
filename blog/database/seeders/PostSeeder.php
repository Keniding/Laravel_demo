<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = 'Post 1';
        $post->content = 'This is the content of post 1';
        $post->category = 'Category One of the post 1';
        $post->save();

        // Crear 10 publicaciones con valores aleatorios
        Post::factory(10)->create();

        // Crear una publicación específica
        Post::factory()->create([
            'title' => 'Post 1',
            'content' => 'This is the content of post 1',
            'category' => 'Category One of the post 1',
        ]);
    }
}
