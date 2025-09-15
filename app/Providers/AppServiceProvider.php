<?php

namespace App\Providers;

use App\Repositories\Interface\RoomRepositoryInterface;
use App\Repositories\RoomRepository;
use App\Services\ImageService;
use App\Services\Interface\ImageServiceInterface;
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
        $this->app->bind(ImageServiceInterface::class, ImageService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
