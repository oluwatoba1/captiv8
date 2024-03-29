<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function($faker) {

	return[
		'name'	=> $faker->name
	];

});

$factory->define(App\Product::class, function($faker) {

	return[
		'name'			=> $faker->word,
		'description'	=> $faker->sentence,
		'size'			=> $faker->word,
		'price'			=> $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000),
		'image'			=> $faker->imageUrl($width = 235, $height = 235),
		'category_id'	=> function() {

				return factory('App\Category')->create()->id;

		}

	];

});
