<?php

namespace App\Listeners;

use App\Events\SendEmailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendEmailEventListener
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
     * @param  SendEmailEvent  $event
     * @return void
     */
    public function handle(SendEmailEvent $event)
    {
        Mail::send($event->view, $event->data,  function ($mes) use ($event){
          $mes->from('customer_service@bsgroup.com.vn');
          $mes->to($event->to);
          $mes->subject($event->owner, $event->subject);
      });
    }
}
