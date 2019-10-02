<?php

//namespace App\Models\Portal;

use App\User;
use App\Models\Portal\Comment;
use App\Models\Portal\Post;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $userId = User::pluck('id')->toArray();
//        $postIds = Post::pluck('id')->toArray();

        $comments = factory(Comment::class, 40)
        ->make()
        ->each(function($comment) {
            $comment->user_id = rand(1, 5);
            $comment->post_id = rand(1, 50);
            $comment->parent_id = rand(1,10);
        })->toArray();

        Comment::insert($comments);
    }
}
