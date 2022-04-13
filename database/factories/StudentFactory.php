<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
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
            'birthdate' => $this->faker->date(),
            'father_name' => $this->faker->firstName(),
            'mother_name' => $this->faker->firstName(),
            'level' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'section' => $this->faker->word(),
            'registered_at' => $this->faker->date(),
        ];
    }
}
