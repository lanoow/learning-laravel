<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        PaginationPaginator::useTailwind();

        Gate::define('admin', function(User $user) {
            return $user->username === "lanoow";
        });
    }
}
