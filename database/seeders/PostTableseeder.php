<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific featured posts
        Posts::create([
            'title' => 'Getting Started with Laravel Development',
            'slug' => Str::slug('Getting Started with Laravel Development'),
            'body' => 'Laravel is one of the most popular PHP frameworks for web development. In this comprehensive guide, we will explore the fundamental concepts of Laravel and how to build modern web applications. From routing and controllers to Eloquent ORM and Blade templating, this post covers everything you need to know to start your Laravel journey.',
            'image' => 'frontend/img/blog-1.jpg',
        ]);

        Posts::create([
            'title' => 'Modern Web Design Trends in 2025',
            'slug' => Str::slug('Modern Web Design Trends in 2025'),
            'body' => 'The web design landscape is constantly evolving. In 2025, we are seeing exciting trends that focus on user experience, accessibility, and performance. From minimalist designs to interactive animations, this post explores the latest trends that are shaping the future of web design.',
            'image' => 'frontend/img/blog-2.jpg',
        ]);

        Posts::create([
            'title' => 'Building Responsive Applications with Tailwind CSS',
            'slug' => Str::slug('Building Responsive Applications with Tailwind CSS'),
            'body' => 'Tailwind CSS has revolutionized the way we write CSS. This utility-first framework allows developers to build beautiful, responsive designs quickly and efficiently. Learn how to leverage Tailwind CSS to create stunning user interfaces that work perfectly across all devices.',
            'image' => 'frontend/img/blog-3.jpg',
        ]);

        // Create random posts using factory
        Posts::factory(15)->create();
    }
}