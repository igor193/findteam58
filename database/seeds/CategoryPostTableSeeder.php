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
        
        $postsList = Post::find(1);
        $postsList->categories()
        ->attach(5);
    }
}
