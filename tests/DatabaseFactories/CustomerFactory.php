<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Lukeraymonddowning\Poser\Tests\Models\Customer;
use Lukeraymonddowning\Poser\Tests\Models\User;

/** @var Factory $factory */
$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => factory(User::class),
    ];
});
