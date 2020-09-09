<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $title =  $faker->sentence(5);
    $slug = Str::slug($title, '-');
    return [
        'user_id' => $faker->numberBetween(1,5),
        'category_id' => $faker->numberBetween(1,5),
        'title' => $title,
        'slug' => $slug,
        'summary' => $faker->sentence(45),
        'image' => 'image.png',
        'price' => $faker->numberBetween(10, 9000) . '000',
        'quantity' => $faker->numberBetween(1, 10),
     ];
});
