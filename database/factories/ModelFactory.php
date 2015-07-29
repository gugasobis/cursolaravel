<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Curso\Models\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Curso\Models\Client::class, function ($faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->str_random(10),
        'address' => $faker->name,
        'obs' => $faker->name
    ];
});

$factory->define(Curso\Models\Project::class, function ($faker) {
    return [
        'owner_id' => $faker->str_random(10),
        'client_id' => $faker->str_random(10),
        'name' => $faker->name,
        'description' => $faker->name,
        'progress' => $faker->email,
        'status' => $faker->name,
        'address' => $faker->name,
        'due_date' => $faker->date()
    ];
});
