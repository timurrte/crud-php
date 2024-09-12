<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\BaseController;
use App\Models\Post;

class IndexController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post)
    {

        $posts = Post::paginate(10);
        return view('post.index', compact('posts'));
    }
}
