<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'))->with('id');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'unique:title,id',
            'description' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->slug =  $request->title . '-' . $post->setSlugAttribute($request->title);
        $post->description = $request->description;
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('posts.show')->withPost($post);
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
