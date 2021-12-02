<?php

namespace Database\Factories;

use App\Models\Book;
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
            'book_id' => Book::factory(),
            'issn' => $this->faker->unique(true)->numerify('####-####'),
            'link' => 'src/' . $this->faker->unique()->numerify('magazine-#####') . '.pdf',
        ];
    }
}
