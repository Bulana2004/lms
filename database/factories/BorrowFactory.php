<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'books_id' => fake()->numberBetween(1,100),
            'issuer_id' => fake()->numberBetween(1,100),
            'borrow_date' => null,
            'handover_date' => null
        ];
    }
}
