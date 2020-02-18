<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'emp_name' => $faker->name,
        'salary'   => $faker->numberBetween($min = 5000, $max = 90000),
        'job_description'=> $faker->paragraph
    ];
});
