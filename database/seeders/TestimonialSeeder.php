<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific testimonials
        Testimonial::create([
            'name' => 'John Smith',
            'image' => 'frontend/img/testimonial-1.jpg',
            'description' => 'Outstanding service and exceptional quality. The team delivered exactly what we needed and exceeded our expectations.',
            'profession' => 'CEO, Tech Solutions Inc.',
        ]);

        Testimonial::create([
            'name' => 'Sarah Johnson',
            'image' => 'frontend/img/testimonial-2.jpg',
            'description' => 'Professional, reliable, and innovative. Working with this team has been a game-changer for our business.',
            'profession' => 'Marketing Director, Digital Agency',
        ]);

        Testimonial::create([
            'name' => 'Michael Brown',
            'image' => 'frontend/img/testimonial-3.jpg',
            'description' => 'The attention to detail and commitment to excellence is remarkable. Highly recommended for any project.',
            'profession' => 'Founder, StartUp Hub',
        ]);

        // Create random testimonials
        Testimonial::factory(7)->create();
    }
}
