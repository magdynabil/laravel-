<?php

namespace App\Listeners;

use App\Events\Eventtest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListenertest
{
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
     * @param  Eventtest  $event
     * @return void
     */
    public function handle(Eventtest $event)
    {
        //
    }
}
