<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name'=>'Admin-DevPremier',
        'email'=>'admin@devpremier.com',
        'password'=>'$2y$10$pgKmSalmALmcD5GdI8BjfO62aO/vPfxJwPlzgw6jqABsiyDKjjE9i'
    ];
});
