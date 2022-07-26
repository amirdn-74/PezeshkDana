<?php

namespace App\Providers;

use App\Models\Request;
use App\Models\User;
use App\Policies\AdminsPolicy;
use App\Policies\DashboardPolicy;
use App\Policies\GetPromotionPolicy;
use App\Policies\RequestsPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Request::class => RequestsPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('seeDashboard', [DashboardPolicy::class, 'seeDashboard']);
        Gate::define('submitRequest', [GetPromotionPolicy::class, 'submitRequest']);
        Gate::define('manageAdmins', [AdminsPolicy::class, 'manageAdmins']);
    }
}
