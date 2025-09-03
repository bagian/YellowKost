<?php

namespace App\Providers;

use App\Repositories\Interface\RoomRepositoryInterface;
use App\Repositories\RoomRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(RoomRepositoryInterface::class, RoomRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
