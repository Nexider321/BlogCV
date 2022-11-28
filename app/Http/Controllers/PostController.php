<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::where('is_published', true)->where('id', $id)->firstOrFail();
        return view('post', [
            'post' => $post,
        ]);
    }

    public function index()
    {
        $posts = Post::where('is_published', true)->limit(10)->get();



        return view('posts', [
            'posts' => $posts,

        ]);
    }


}
