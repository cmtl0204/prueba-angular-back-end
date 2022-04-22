<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'asin' => $this->faker->randomNumber(9, true),
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'editorial' => $this->faker->word(),
            'stock' => $this->faker->randomNumber(3, false),
        ];
    }
}
