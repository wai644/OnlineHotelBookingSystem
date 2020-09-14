<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
     return [
      'name' => $faker->sentence($nbWords = 3),
      'photo' => 'backend/serviceimg/' . $faker->image('public/backend/serviceimg',400,300, null, false),
    ];
});
