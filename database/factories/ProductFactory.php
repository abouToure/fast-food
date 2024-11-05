<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // $title = $this->faker->unique()->sentence(2, true);
        return [
            'name' => $this->faker->word(3, true),
            //'shop_id' => rand(1, 3),
            'price' => rand(10, 30),

            'description' =>  $this->faker->sentence(15, true),
            'status' => rand(0, 1),
            'category_id' =>  Category::all()->random()->id,
            'poster_url' => 'default.jpg',
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-10 days')
        ];
    }
}
