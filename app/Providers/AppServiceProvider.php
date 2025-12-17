<?php

namespace App\Providers;

use App\Repositories\Interface\JournalRepositoryInterface;
use App\Repositories\Interface\ActivityRepositoryInterface;
use App\Repositories\Interface\PaymentRepositoryInterface;
use App\Repositories\Interface\RoomRepositoryInterface;
use App\Repositories\Interface\TenantRepositoryInterface;
use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\TestimonialRepositoryInterface;
use App\Repositories\JournalRepository;
use App\Repositories\ActivityRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\RoomRepository;
use App\Repositories\TenantRepository;
use App\Repositories\BookingRepository;
use App\Repositories\TestimonialRepository;
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
        $this->app->bind(TenantRepositoryInterface::class, TenantRepository::class);
        $this->app->bind(BookingRepositoryInterface::class, BookingRepository::class);
        $this->app->bind(JournalRepositoryInterface::class, JournalRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);
        $this->app->bind(ActivityRepositoryInterface::class, ActivityRepository::class);

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
