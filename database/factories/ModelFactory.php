<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thread;
use App\Reply;
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

$factory->define(App\Thread::class, function ($faker) {
	return [
		'user_id' => function () {
			return factory('App\User')->create()->id;
		},
		'title' => $faker->sentence,
		'body' => $faker->paragraph
	];
});


$factory->define(App\Reply::class, function ($faker) {
	return [
		'user_id' => function () {
			return factory('App\User')->create()->id;
		},
		'thread_id' => function () {
			return factory('App\Thread')->create()->id;
		},
		'body' => $faker->paragraph
	];
});
