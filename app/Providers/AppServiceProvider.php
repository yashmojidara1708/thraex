<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Settings;
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
        //
        Schema::defaultStringLength(191);

        // Share company details with all views
        // $companyDetails = DB::table('company_details')->first();

        $settings = Settings::all();
        $data = [];

        foreach ($settings as $setting) {
            $data[$setting->name] = $setting->value;
        }
        View::share('data', $data);
    }
}
