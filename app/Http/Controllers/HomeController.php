<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $posts = Post::where('is_published', true)->limit(2)->get();



        return view('index', [
            'posts' => $posts
        ]);
    }


}
