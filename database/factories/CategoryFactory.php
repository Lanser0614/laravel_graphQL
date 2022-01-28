<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText('20'),
            'slug' => $this->faker->slug(),
            'user_id' => $this->faker->numberBetween('1','10'),
        ];
    }
}
