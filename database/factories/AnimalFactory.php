<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName(),
            'age'=>$this->faker->numberBetween(18,100),
            'description'=>$this->faker->sentence(),
            'image'=>$this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
