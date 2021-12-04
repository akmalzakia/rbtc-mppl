<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InquiryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $inq_type = ['complaint', 'request'];
        $type = $inq_type[$this->faker->numberBetween(0, 1)];
        return [
            'user_id' => $this->faker->numberBetween(1, 3),
            'type' => $type,
            'text' => $this->faker->text(),
        ];
    }
}
