<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    return [
        'name' => $faker->name($gender),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('secret'), // secret
        'gender' => $gender,
        'age' => $faker->numberBetween(18,50),
        'country' => 'Nigeria',
        'state' => 'Lagos',
        'bio' => $faker->paragraph,
        'remember_token' => str_random(10),
    ];
});
