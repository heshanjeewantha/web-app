<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(rand(3, 8));
        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'body' => fake()->paragraphs(rand(3, 8), true),
            'image' => 'frontend/img/blog-' . rand(1, 6) . '.jpg',
        ];
    }
}
