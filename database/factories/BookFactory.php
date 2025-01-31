<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn_no' => fake()->numerify('#############'),
            'description' => substr(fake()->text(250),0,250),
            'price' => fake()->randomFloat(2,100,1000),
            'img_src' => fake()->filePath(),
            'qty' => fake()->numberBetween(2,10)
        ];
    }
}
