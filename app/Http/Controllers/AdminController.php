<?php

namespace App\Http\Controllers;

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
        return view ('dashboard', [
            'name' => 'All posts'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
       return view('create', [
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
        $name = $request->input('name');
        $content = $request->input('content');
        $category = $request->input('category');


        $post = new Post;
        $post->name = $name;
        $post->content = $content;
        $post->slug = $name;
        $post->category_id = $category;
        $post->is_published = $category;
//
//        $logo_path = $request->file('logo')->store('images', 'public');
//        $post->logo = $logo_path;


        $post->save();

        $post = Post::all()->first;

        return view('dashboard', [
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
