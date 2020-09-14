<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Roomtype;
use Faker\Generator as Faker;

$factory->define(Roomtype::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence($nbWords = 3),
      'photo' => 'backend/roomtypeimg/' . $faker->image('public/backend/roomtypeimg',400,300, null, false),
    ];
});
