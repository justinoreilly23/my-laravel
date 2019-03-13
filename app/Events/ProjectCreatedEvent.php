<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class ProjectCreatedEvent {

    use Dispatchable, SerializesModels;
    public $project;

    /**
     * Create a new event instance.
     *
     * @param $project
     */
    public function __construct($project)
    {
        session()->flash('message', 'Project successfully created!');

        $this->project = $project;
    }
}