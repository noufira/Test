<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Todo::class, function (Faker $faker) {
    return [
        'name' => $faker->text(40)
    ];
});
