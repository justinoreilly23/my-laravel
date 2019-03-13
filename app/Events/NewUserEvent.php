<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class NewUserEvent {

    use Dispatchable, SerializesModels;
    public $user;

    /**
     * Create a new event instance.
     *
     * @param $user
     */
    public function __construct($user)
    {
        session()->flash('message', "Welcome to Ethereal," . auth()->user()->username . "!");

        $this->user = $user;
    }
}
