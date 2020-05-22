<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role_id'=> '1', // 1 is for admin
        'status'=> 'active',
        'email_verified_at' => now(),
        'password' => '$2y$10$0hJwwcF9nScQRH2Xhzz69uI8HuZWHkdWLJ3SQ.8iMKLAu9iNgxcTq', // devpremier
        'remember_token' => Str::random(10),
    ];
});
