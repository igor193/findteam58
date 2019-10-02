<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Portal\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'messege' => $faker->text(200),
        'publication' => $faker->boolean
    ];
});
