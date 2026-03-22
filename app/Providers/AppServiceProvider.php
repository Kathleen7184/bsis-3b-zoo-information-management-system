<?php

namespace App\Providers;

use Illuminate\Foundation\Auth\User;
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
        
        // Gate::define('can_view_any', function (User $user) {
        //     return $user->hasAnyRole('admin', 'zookeeper','customer');
        // });

        // Gate::define('can_view', function (User $user) {
        //     return $user->hasAnyRole('admin', 'zookeeper','customer');
        // });

        // Gate::define('can_create', function (User $user) {
        //     return $user->hasAnyRole('admin');
        // });

        // Gate::define('can_update', function (User $user) {
        //     return $user->hasAnyRole('admin','zookeeper');
        // });

        // Gate::define('can_delete', function (User $user) {
        //     return $user->hasAnyRole('admin');
        // });
        

    }
}
