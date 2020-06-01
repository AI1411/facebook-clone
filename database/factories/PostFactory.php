<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, User::all()->count()),
        'body' => $faker->sentence,
        'image' => $faker->randomElement([
            'm11.jpeg',
            'm10.jpeg',
            'm9.jpeg',
            'm6.jpeg',
            'm7.jpeg',
            'm5.jpeg',
            'm8.jpeg',
            'm4.jpeg',
            'm3.jpeg',
            'm2.jpeg',
            'm1.jpeg',
            '12.jpeg',
            '10.jpeg',
            '9.jpeg',
            '8.jpeg',
            '7.jpeg',
            '6.jpeg',
            '5.jpeg',
            '4.jpeg',
            '3.jpeg',
            '2.jpeg',
            '1.jpg',
        ])
    ];
});
