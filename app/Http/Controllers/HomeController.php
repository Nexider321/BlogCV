<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $post = Post::where('is_published', true);



        return view('index', [
            'post' => $post
        ]);
    }


}
