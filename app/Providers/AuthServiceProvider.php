<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('add-account', function($user) {
            return $user->level == 2;
        });

        Gate::define('show-account', function($user) {
            return $user->level == 2 || $user->level == 1;
        });

        Gate::define('edit-account', function($user) {
           return $user->level == 2 || $user->level == 1;
        });

        Gate::define('self-edit', function($user) {
            return $user->level == 1 || $user->level == 2;
        });

        Gate::define('delete-account', function($user) {
           return $user->level == 2;
        });
    }
}
