<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conversation;
use Faker\Generator as Faker;

$factory->define(Conversation::class, function (Faker $faker) {
    return [
        'user_id'=>factory(\App\User::class),
        'Title'=>$faker->sentence,
        'body'=>$faker->paragraph,
        'best_reply_id'=>9

    ];
});
