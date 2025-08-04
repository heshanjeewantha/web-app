<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample contact messages
        Contact::create([
            'sender_name' => 'Alice Cooper',
            'sender_email' => 'alice@company.com',
            'sender_phone' => '+1 (555) 123-4567',
            'sender_project' => 'Website Development',
            'sender_subject' => 'Need a new corporate website',
            'sender_message' => 'Hello, we are looking to redesign our company website with modern features and responsive design. Please contact us to discuss the requirements.',
        ]);

        Contact::create([
            'sender_name' => 'Bob Wilson',
            'sender_email' => 'bob.wilson@email.com',
            'sender_phone' => '+1 (555) 987-6543',
            'sender_project' => 'Mobile App',
            'sender_subject' => 'Mobile application development inquiry',
            'sender_message' => 'We need a mobile app for both iOS and Android platforms. The app should include user authentication, payment processing, and real-time notifications.',
        ]);

        // Create random contact messages
        Contact::factory(15)->create();
    }
}
