<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => 'frontend/img/testimonial-' . rand(1, 6) . '.jpg',
            'description' => fake()->paragraph(rand(2, 4)),
            'profession' => fake()->jobTitle(),
        ];
    }
}
