<?php

$factory->define(App\Users\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Posts\Post::class, function ($faker) {
    return [
    	'user_id' => 'factory:App\Users\User',
    	'image' => $faker->image,
        'title' => $faker->sentence,
        'body' => $faker->paragraph(10),
        'published_at' => Carbon\Carbon::now()               
    ];
});
