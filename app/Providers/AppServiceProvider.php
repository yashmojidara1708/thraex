<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        $data = [];
        $userList = [];

        // Check if 'settings' table exists before querying
        if (Schema::hasTable('settings')) {
            $settings = Settings::all();
            foreach ($settings as $setting) {
                $data[$setting->name] = $setting->value;
            }
        }

        // Check if 'users' table exists before querying
        if (Schema::hasTable('users')) {
            $users = User::all();
            foreach ($users as $user) {
                $userList[] = [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email
                ];
            }
        }

        View::share([
            'data' => $data,
            'userList' => $userList
        ]);
    }
}
