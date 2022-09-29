<?php

namespace Modules\ThemeMidone\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\BaseCore\Contracts\Services\ThemeContract;
use Modules\ThemeMidone\Entities\Theme;

class ThemeMidoneServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->singleton(ThemeContract::class, Theme::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
