<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific slider content
        Slider::create([
            'top_sub_heading' => 'Welcome to',
            'heading' => 'Our Amazing Web Application',
            'bottom_sub_heading' => 'Building the future with innovative technology solutions',
            'image_link' => 'frontend/img/slider-1.jpg',
            'more_info_link' => '#about',
        ]);

        Slider::create([
            'top_sub_heading' => 'Discover',
            'heading' => 'Excellence in Every Detail',
            'bottom_sub_heading' => 'Professional services tailored to meet your business needs',
            'image_link' => 'frontend/img/slider-2.jpg',
            'more_info_link' => '#services',
        ]);

        // Create random sliders
        Slider::factory(3)->create();
    }
}
