<?php

use App\Models\Portal\Post;
use App\Models\Portal\Category;
use Illuminate\Database\Seeder;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postIds = Post::all()->pluck('id')->toArray();

        foreach ($postIds as $postId) {
            $categoryNumber = rand(1, 6);
            $postsList = Post::find($postId);
            $postsList->category()
                ->attach($categoryNumber);
        }


    }
}
