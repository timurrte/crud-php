<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class IndexController extends \App\Http\Controllers\Controller
{
    public function __invoke(Request $request) {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
}
