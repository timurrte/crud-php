<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class PostController extends Controller
{
    public function index(Request $request) {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create() {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'string|nullable',
            'category_id' => '',
            'tags' => ''
        ]);
        $tags = $data['tags'] ?? [];
        unset($data['tags']);
        
        $post = Post::create($data);
        $post->tags()->sync($tags);
        
        return redirect()->route('post.index');
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post) {
        $data = request()->validate([
            'title'=> 'required|string',
            'content'=> 'required|string',
            'image' => 'string|nullable',
            'category_id' => '',
            'tags' => ''
        ]);
        $tags = $data['tags'] ?? [];
        unset($data['tags']);
        
        $post->update($data);
        $post = $post->fresh();

        $post->tags()->sync($tags);
        
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.index');
    }
}
