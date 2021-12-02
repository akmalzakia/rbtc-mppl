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
            'name' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'publisher' => $this->faker->company(),
            'year_published' => $this->faker->year(),
            'description' => $this->faker->text()
        ];
    }
}
