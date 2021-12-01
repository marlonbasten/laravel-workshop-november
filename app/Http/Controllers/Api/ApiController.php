<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function test(Request $request)
    {
        $post = Post::find(117);

        return PostResource::make($post);
    }

    public function index(Request $request)
    {
        if (!auth()->user()->tokenCan('post:list')) {
            abort(403);
        }

        $posts = Post::query();

        if ($request->date) {
            $date = Carbon::parse($request->date);
            $posts->whereDate('created_at', $date);
        }

        if ($request->title) {
            $posts->where('title', '=', $request->title);
        }

        if ($request->sortBy) {
            $posts->orderBy($request->sortBy, $request->direction ?? 'asc');
        }

        return $posts->get();
    }
}
