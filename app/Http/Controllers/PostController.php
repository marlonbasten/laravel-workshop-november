<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
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
}
