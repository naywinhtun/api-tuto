<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement([1,2]),
        'title' => $faker->text(100),
        'body' => $faker->text(800),
    ];
});
