<?php

namespace App\Providers;

use App\Repositories\GeneratedDevNameRepository;
use App\Repositories\GeneratedDevNameRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(GeneratedDevNameRepositoryInterface::class, GeneratedDevNameRepository::class);
    }


    public function boot(): void
    {
        //
    }
}
