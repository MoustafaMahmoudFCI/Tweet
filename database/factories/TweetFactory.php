<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Tweet;
use App\User;
use Faker\Generator as Faker;

$factory->define(Tweet::class, function (Faker $faker) {
    $users = User::all();
    return [
        'user_id' => rand(1, $users->count()),
        'body' => $faker->paragraph()
    ];
});
