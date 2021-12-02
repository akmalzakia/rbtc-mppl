<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class TextbookFactory extends Factory
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
            'isbn' => $this->faker->unique()->numerify('###-#-##-######-#'),
            'author' => $this->faker->name(),
            'edition' => $this->faker->randomDigit(),
            'link' => 'src/' . $this->faker->unique()->numerify('textbook-#####') . '.pdf',
        ];
        
    }

    public function category_seq()
    {
        return $this->sequence(
            ['category' => 'Machine Learning'],
            ['category' => 'Algorithm'],
            ['category' => 'Software Architecture'],
        );
    }
}
