<?php

namespace App\Listeners;

use App\Events\HelloEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendHelloNotification implements ShouldQueue
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
     * @param  HelloEvent  $event
     * @return void
     */
    public function handle(HelloEvent $event)
    {
        dd($event);
    }
}
