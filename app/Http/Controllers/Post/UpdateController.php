<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class UpdateController extends \App\Http\Controllers\Controller
{
    public function __invoke(Post $post) {
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
