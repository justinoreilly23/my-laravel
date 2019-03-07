<?php

namespace App\Providers\Profile;

use App\Http\Controllers\AdorableAvatarsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AdorableAvatarsServiceProvider extends ServiceProvider {

    public $adorableAvatarsCont;

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
        $this->adorableAvatarsCont = new AdorableAvatarsController();

        View::composer('layouts.master',
            function ($view) {
                view()->share('sc_adorableAvatar', $this->adorableAvatarsCont->avatar());
            });
    }
}
