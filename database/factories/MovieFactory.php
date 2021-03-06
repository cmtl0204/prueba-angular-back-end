<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
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
            'director' => $this->faker->firstName(),
            'photo' => $this->faker->imageUrl(640, 480, 'animals', true),
            'price' => $this->faker->randomFloat(2,1,100),
        ];
    }
}
