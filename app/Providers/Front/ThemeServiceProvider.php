<?php

namespace App\Providers\Front;

use App\Http\Controllers\ThemeController;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $themeController = new ThemeController();
        view()->share('sc_theme', $themeController->theme());
    }
}
