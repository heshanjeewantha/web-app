<?php
require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\{User, Posts, Slider, Testimonial, Contact, Settings};

echo "=== SAMPLE DATA OVERVIEW ===\n\n";

echo "📊 Database Statistics:\n";
echo "Users: " . User::count() . "\n";
echo "Posts: " . Posts::count() . "\n";
echo "Sliders: " . Slider::count() . "\n";
echo "Testimonials: " . Testimonial::count() . "\n";
echo "Contacts: " . Contact::count() . "\n";
echo "Settings: " . Settings::count() . "\n\n";

echo "👥 Sample Users:\n";
User::take(3)->get()->each(function($user) {
    echo "- {$user->name} ({$user->email})\n";
});

echo "\n📝 Sample Posts:\n";
Posts::take(3)->get()->each(function($post) {
    echo "- {$post->title}\n";
});

echo "\n🎠 Sample Sliders:\n";
Slider::take(2)->get()->each(function($slider) {
    echo "- {$slider->heading}\n";
});

echo "\n💬 Sample Testimonials:\n";
Testimonial::take(2)->get()->each(function($testimonial) {
    echo "- {$testimonial->name} ({$testimonial->profession})\n";
});

echo "\n📧 Sample Contacts:\n";
Contact::take(2)->get()->each(function($contact) {
    echo "- {$contact->sender_name} - {$contact->sender_subject}\n";
});

echo "\n⚙️ Site Settings:\n";
Settings::where('key', 'LIKE', 'site_%')->take(3)->get()->each(function($setting) {
    echo "- {$setting->key}: {$setting->value}\n";
});

echo "\n✅ Sample data generation completed successfully!\n";
?>
