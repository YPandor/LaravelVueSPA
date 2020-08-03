<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Secret;
use Faker\Generator as Faker;

$factory->define(Secret::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->randomDigit,
        'secret' => $faker->text
    ];
});
