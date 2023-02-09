<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => 'Product'. $this->faker->name,
            'category_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
