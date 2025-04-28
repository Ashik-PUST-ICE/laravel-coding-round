<?php

namespace App\Http\Controllers;



use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $post = Post::create($validated);

        return response()->json($post, 201);
    }

    public function postIndex()
    {
        return response()->json(Post::all());
    }

    public function postShow($id)
    {
        $post = Post::findOrFail($id);

        return response()->json($post);
    }
}

