<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory()->count(200)->create();

        $tags = Tag::all();

    $posts->each(function (Post $post) use ($tags) {
        $tagsId = $tags->random(rand(1,4))->pluck('id');
        $post->tags()->attach(
            $tagsId
        );
    });
    }
}
