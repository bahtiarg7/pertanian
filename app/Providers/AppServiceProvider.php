<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Gate;
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
        // URL::forceScheme('https');
        Gate::define('admin', function ($user) {
            return $user->role == 'admin';
        });
        Gate::define('kadin', function ($user) {
            return $user->role == 'kadin';
        });
        Gate::define('sekdin', function ($user) {
            return $user->role == 'sekdin';
        });
        Gate::define('bidang', function ($user) {
            return $user->role == 'bidang';
        });
        Gate::define('uptd', function ($user) {
            return $user->role == 'uptd';
        });
    }
}
