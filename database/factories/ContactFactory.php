<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projects = ['Website Development', 'Mobile App', 'E-commerce', 'Digital Marketing', 'SEO', 'Consulting'];
        return [
            'sender_name' => fake()->name(),
            'sender_email' => fake()->safeEmail(),
            'sender_phone' => fake()->phoneNumber(),
            'sender_project' => fake()->randomElement($projects),
            'sender_subject' => fake()->sentence(rand(3, 6)),
            'sender_message' => fake()->paragraphs(rand(2, 4), true),
        ];
    }
}
