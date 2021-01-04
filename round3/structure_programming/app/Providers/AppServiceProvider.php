<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Product\Repository\ProductRepository;
use Modules\Product\Repository\WebProductInterface;
use Modules\Product\Repository\AdminProductInterface;
use Modules\Product\Repository\BrandRepository;
use Modules\Product\Repository\BrandInterface;

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
        $this->app->singleton(WebProductInterface::class, ProductRepository::class);
        $this->app->singleton(AdminProductInterface::class, ProductRepository::class);
        $this->app->singleton(BrandInterface::class, BrandRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
