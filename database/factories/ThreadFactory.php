<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Thread;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Thread::class, function (Faker $faker) {
	$title = $faker->sentence(2);
	$slug = Str::slug($title);

    return [
        'title' => $title,
        'slug' => $slug,
        'text' => $faker->sentence(15)
    ];
});
