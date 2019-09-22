<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\User::class, 5)
            ->create()->each(function($user) {
               $user->post()
                   ->saveMany(factory(App\Models\Portal\Post::class, 10)
                   ->make());
        });
    }
}
