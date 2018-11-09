<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return User::all()->random();
        },
        'body' => $faker->paragraph
    ];
});
