<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(StoreCategoryRequest $request)
    {
        // $category = Category::where('name', '=', $request->name)->first();
        // if(!$category) {
        //     $category = Category::create($request->only(['name']));
        // }
        $category = Category::firstOrCreate([
            'name' => $request->name,
        ]);

        $post = Post::find($request->post_id);

        // Fügt relations an, ohne die alten zu löschen und lässt
        // es zu, mehrere der selben relations zu erstellen.
        // $post->categories()->attach($category);
        // $post->categories()->syncWithoutDetaching($category);

        $post->categories()->sync($category, false);

        return redirect()->back();
    }
}
