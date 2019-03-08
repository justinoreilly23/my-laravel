<?php

namespace App\Providers\Profile;

use App\Helpers\Avatar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AdorableAvatarsServiceProvider extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require app_path('Helpers/Avatar.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
