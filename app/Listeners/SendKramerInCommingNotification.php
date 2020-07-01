<?php

namespace App\Listeners;

use App\Events\KramerInComming;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendKramerInCommingNotification
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
     * @param  KramerInComming  $event
     * @return void
     */
    public function handle(KramerInComming $event)
    {
        if ($event->kramer->isKramer()) {
            foreach (User::enumSupserVisor() as $superVisor){
                Mail::to($superVisor->email)->send(new \App\Mail\KramerInComming($event->kramer));
            }
        }
    }
}
