<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Ordenar los posts por el campo 'order' antes de devolverlos
        $posts = Post::orderBy('order')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'order' => 'required|integer',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'Post creado exitosamente.');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'order' => 'required|integer',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente.');
    }
}
