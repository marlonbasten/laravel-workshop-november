<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function hallo()
    {
        echo 'Hallo Welt!';
    }

    public function create()
    {
        $posts = Post::all();
        foreach($posts as $post) {
            echo $post->title;
            echo '<br>';
        }

        return view('post.create');
    }

    public function store(PostStoreRequest $request)
    {
        Post::create($request->validated());

        return 'Post erstellt!';
    }

    public function list()
    {
        $posts = Post::with('comments')->get(); // Lädt die comments relation direkt mit
        // $posts = Post::all(); - Lazy loading -> Lädt relations nach

        foreach ($posts as $post) {
            echo $post->title;

            foreach ($post->comments as $comment) {
                echo $comment->content;
            }

            echo '<hr>';
        }
    }
}
