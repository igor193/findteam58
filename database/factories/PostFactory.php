<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Portal\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'topic' => $faker->sentence(1),
        'slug' => $faker->slug,
        'entry' => $faker->text(200),
        'body' => $faker->text(600),
        'publication' => $faker->boolean
    ];
});
