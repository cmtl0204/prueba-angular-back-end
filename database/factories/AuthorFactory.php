<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->randomNumber(5,true),
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'address' => $this->faker->address(),
            'telephone' => $this->faker->phoneNumber(),
        ];
    }
}
