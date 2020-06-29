<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $brandId = App\Models\Brand::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'desc' => 'Hàng Chính Hãng',
        'images' => $faker->imageUrl(),
        'price' => $faker->numberBetween(100,500),
        'brand_id' => $faker -> randomElement($brandId),

    ];
});