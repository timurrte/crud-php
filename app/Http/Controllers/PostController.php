<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Request $request) {
        // $posts = Post::all();
        // return view('post.index', compact('posts'));
        $post = Post::find(2);
        dd($post->tags);
    }

    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string|nullable'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post) {
        $data = request()->validate([
            'title'=> 'string',
            'content'=> 'string',
            'image' => 'string|nullable'
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.index');
    }
}
