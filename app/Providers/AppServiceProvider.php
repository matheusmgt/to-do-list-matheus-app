<?php

namespace App\Providers;

use App\Repositories\Todo\TodoRepositoryInterface;
use App\Repositories\Todo\TodoEloquentORM;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TodoRepositoryInterface::class, TodoEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
