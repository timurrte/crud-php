<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class DestroyController extends \App\Http\Controllers\Controller
{
    public function __invoke(Post $post) {
        $post->delete();
        return redirect()->route('post.index');
    }
}
