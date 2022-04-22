<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'identification' => $this->faker->randomNumber(9, true),
            'birthdate' => $this->faker->date(),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
