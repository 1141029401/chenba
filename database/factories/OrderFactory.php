<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {

	$date_time = $faker->date . " " . $faker->time;

    return [
        "order_name" => $faker->name,
        "order_price" => Str::random(5),
        "order_info" => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time
    ];
});
