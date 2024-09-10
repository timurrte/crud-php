<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class StoreController extends \App\Http\Controllers\Controller
{
    public function __invoke(Request $request) {
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
}
