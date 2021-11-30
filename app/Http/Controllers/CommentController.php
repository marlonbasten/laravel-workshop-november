<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        Comment::create($request->validated());
        // $comment = new Comment($request->all());
        // $comment->post_id = $request->post_id;
        // $comment->save();

        return redirect()->back();
    }
}
