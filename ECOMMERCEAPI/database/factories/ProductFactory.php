<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker= new Faker(); 
        return [
            'title' => "ggggggg",
        'description' => "rrrrrrrrrrrrrrr",
        'image' => "https://via.placeholder.com/150x100",
        'price' => rand(10, 100)
        ];
    }
}
