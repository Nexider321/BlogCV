<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();

        return view ('dashboard', [
            'name' => 'All posts',
            'posts' => Post::all(),
            'tags' => $tags

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
       return view('admin.posts.create', [
           'name' => 'Create a post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $name = $request->input('title');
        $content = $request->input('body');
        $category = $request->input('category');
        $image = $request->file('image')->store('images', 'public');

        $post = new Post;
        $post->title = $name;
        $post->body = $content;
        $post->slug = $name;
        $post->category_id = $category;
        $post->is_published = $category;

        $post->image = $image;


        $post->update();

        $post = Post::all()->first;

        return view('admin.posts.create', [
            'name' => $post->name,
            'content' => $post->content,
            'slug' => $post->name,
            'category' => $post->category_id,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->firstOrFail();


        return view('admin.posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('title');
        $content = $request->input('body');
        $category = $request->input('category');
        $image = $request->file('image')->store('images', 'public');

        $post = new Post;
        $post->title = $name;
        $post->body = $content;
        $post->slug = $name;
        $post->category_id = $category;
        $post->is_published = $category;
//

        $post->image = $image;


        $post->update();

        $posts = Post::all()->first;

        return view('dashboard', [
            'posts' => $posts
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
