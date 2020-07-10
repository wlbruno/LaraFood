<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\{
    TenantRepositoryInterface,
    CategoryRepositoryInterface
};
use App\Repositories\{
    TenantRepository,
    CategoryRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TenantRepositoryInterface::class,
            TenantRepository::class
        );

        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
