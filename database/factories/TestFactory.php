<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use \App\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'text' => $faker->text(50),
        'is_enabled' => $faker->boolean
    ];
});
