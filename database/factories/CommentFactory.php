<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comments;
use App\Models\Thread;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'thread_id' => function(){
            return factory(Thread::class)->create()->id;
        },
        'body' => $faker->sentence(10)
    ];
});
