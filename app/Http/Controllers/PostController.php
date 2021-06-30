<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function all()
    {
        return view('landing', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }

    public function showPost(Post $post)
    {
        return view('single', compact('post'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
