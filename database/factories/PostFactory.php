<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Portal\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(2);
    return [
        'topic' => $title,
        'slug' => $faker->word,
        'entry' => $faker->text(200),
        'body' => $faker->text(600),
        'publication' => $faker->boolean
    ];
});
