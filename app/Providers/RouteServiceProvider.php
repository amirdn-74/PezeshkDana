<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/dashboard')
                ->group(base_path('routes/panel/dashboard.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/articles')
                ->group(base_path('routes/panel/articles.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/que')
                ->group(base_path('routes/panel/que.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/assignments')
                ->group(base_path('routes/panel/assignments.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/categories')
                ->group(base_path('routes/panel/categories.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/resources')
                ->group(base_path('routes/panel/resources.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/users')
                ->group(base_path('routes/panel/users.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/requests')
                ->group(base_path('routes/panel/requests.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/admins')
                ->group(base_path('routes/panel/admins.php'));

            Route::middleware(['web', 'auth'])
                ->prefix('/panel/get-promote')
                ->group(base_path('routes/panel/promotion.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
