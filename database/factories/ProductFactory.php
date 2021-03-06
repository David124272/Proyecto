<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->word(),
            'total' => $this->faker->randomFloat(2, 10, 5000),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->randomNumber(5),
            'status' => $this->faker->boolean(),
            'category_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
