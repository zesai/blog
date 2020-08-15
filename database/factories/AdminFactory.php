<?php

/** @var Factory $factory */

use App\Models\Admin\Admins;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

// 头像假数据
$avatars = [
    '/uploads/image/avatar/01.png',
    '/uploads/image/avatar/02.png',
    '/uploads/image/avatar/03.png',
    '/uploads/image/avatar/04.png',
    '/uploads/image/avatar/05.png',
];

$factory->define(Admins::class, function (Faker $faker) use ($avatars){

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'username' => Str::random(10),
        'name' => $faker->name,
        'avatar' => $faker->randomElement($avatars),
        'password' => bcrypt('secret'),
        'remember_token' => Str::random(10),
        'created_at' => $date_time,
        'updated_at' => $date_time,
        'deleted_at' => null,
    ];

});
