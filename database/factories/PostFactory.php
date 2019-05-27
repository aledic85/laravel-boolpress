<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->word(rand(1, 5)),
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2)
    ];
});
