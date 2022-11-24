<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('is_published', true)->where('slug', $slug)->firstOrFail();

        $category = Post::first();

        return view('post', [
            'post' => $post,
            'category' => $category,
        ]);
    }


}
