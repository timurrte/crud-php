<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request) {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function create() {
        $postsArr = [
            [
                "title"=> "Abhaz crysis",
                "content" => "New crysis striked abhaz region",
                "likes" => "34",
            ],
            [
                "title"=> "AI models are taking over IT jobs",
                "content" => "AI is taking over the world",
                "likes" => "678",
            ],
            [
                "title"=> "Wukong Command is the best spell in Dota 2",
                "content" => "Monkey king's ultimate ability \"Wukong's command is the best ability in Dota 2",
                "likes" => "9082",
            ]
            ];
        foreach ($postsArr as $post) {
            Post::create($post);
        }
    }

    public function update() {
        $post = Post::find(3);
        
        $post->update([
            'title' => 'Updated',
        ]);
        dd($post->name);
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete();
        dd("Deleted post with id = {$id}");
    }

    public function updateOrCreate() {

        Post::updateOrCreate([
            'title' => 'Abhaz crysis',
        ],
        [
            'title' => 'New abhaz',
            'content' => 'No content here',
            'likes' => 500,
        ]);
        dd('Updated or created');
    }

    public function firstOrCreate() {
        $post = Post::firstOrCreate(
            [
                'title' => 'Superb AI model'
            ],
            [
                'content' => 'New blazing fast AI model just dropped',
            ]
            );
        dd($post->title);
        dd('First or created');
    }
}
