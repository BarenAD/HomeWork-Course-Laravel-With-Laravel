<?php

namespace App\Providers;

use App\Services\BasicService;
use App\Services\TestOne;
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
        $this->app->bind(BasicService::class, function ()   {
            return new BasicService(new TestOne());
        });
        $this->app->alias(BasicService::class, 'service.basic_service');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
