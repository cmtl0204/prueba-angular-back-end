<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MagazineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
