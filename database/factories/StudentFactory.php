<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'email'=> $faker->email,
        'university_id'=> rand(pow(10, 5-1), pow(10, 5)-1),
        'f_name'=> $faker->name,
        'address'=> $faker->address
    ];
});
