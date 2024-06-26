<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
         'App\Models\Item' => 'App\Policies\itemPolicy',
         'App\Models\Contact'=>'App\Policies\ContactPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
            });
          
        Gate::define('isUser',function($user){
            return $user->role=='user';
        });
        Gate::define('isSupport',function($user){
            return $user->role=="support";
        });
    }
}