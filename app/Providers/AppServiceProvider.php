<?php

namespace Curso\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Curso\Interfaces\ClientInterface::class,
            \Curso\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \Curso\Interfaces\ProjectInterface::class,
            \Curso\Repositories\ProjectRepositoryEloquent::class
        );
    }
}
