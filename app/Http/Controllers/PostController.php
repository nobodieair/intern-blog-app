<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostController extends Controller
{
        public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }


    public function show($id)
    {
            try {
            $post = Post::findOrFail($id);
            return view('posts.show', compact('post'));
        } catch (ModelNotFoundException $e) {
            return redirect('/posts')->with('error', 'Post not found');
        }
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5|max:255|unique:posts',
            'content' => 'required|min:10',
        ]);

        Post::create($validated);

        return redirect('/posts')->with('success', 'Post created successfully.');
    }
}
