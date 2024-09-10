<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
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
