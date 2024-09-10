<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post)
    {
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
}
