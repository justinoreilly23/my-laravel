<?php

namespace App\Providers\Front;

use App\Http\Controllers\ActiveTabController;
use Illuminate\Support\ServiceProvider;

class ActiveTabServiceProvider extends ServiceProvider {

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
        $activeTabCont = new ActiveTabController();
        view()->share('sc_active', $activeTabCont->activeTab());
    }
}
