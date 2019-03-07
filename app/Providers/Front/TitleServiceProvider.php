<?php

namespace App\Providers\Front;

use App\Http\Controllers\TitleController;
use Illuminate\Support\ServiceProvider;

class TitleServiceProvider extends ServiceProvider {

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
        $titleCont = new TitleController();
        view()->share('sc_title', $titleCont->title());
    }
}
