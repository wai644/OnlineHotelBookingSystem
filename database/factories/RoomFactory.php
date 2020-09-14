<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
     return [
      'name' => $faker->sentence($nbWords = 3),
      'photo' => 'backend/roomimg/' . $faker->image('public/backend/roomimg',400,300, null, false),
    ];
});
