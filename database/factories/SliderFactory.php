<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'top_sub_heading' => fake()->words(2, true),
            'heading' => fake()->sentence(rand(3, 6)),
            'bottom_sub_heading' => fake()->sentence(rand(4, 8)),
            'image_link' => 'frontend/img/slider-' . rand(1, 5) . '.jpg',
            'more_info_link' => fake()->url(),
        ];
    }
}
