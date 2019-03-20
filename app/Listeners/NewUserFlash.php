<?php

namespace App\Listeners;

use App\Events\NewUserEvent;
use App\Helper;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserFlash {

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param NewUserEvent $event
     * @return void
     */
    public function handle(NewUserEvent $event)
    {
        Helper::flash("Welcome to Ethereal," . $event->user->username . "!");
    }
}
