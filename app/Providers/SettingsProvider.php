<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class SettingsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        try {
            // Only load settings for web requests, not for console commands
            if (!app()->runningInConsole()) {
                // Check if the settings table exists
                if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                    $main_settings = Settings::all()->pluck('value','key')->toArray();
                    View::share('main_settings',$main_settings);
                }
            }
        } catch (\Exception $e) {
            // Silently handle database connection errors during boot
            // This allows the application to start even if the database is not available
        }
    }
}
