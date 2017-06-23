<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SendEmailEvent extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $view;
    public $data;
    public $to;
    public $owner;
    public $subject;

    public function __construct($view, $data = array(), $to, $owner, $subject)
    {
      $this->view = $view;
      $this->data = $data;
      $this->to = $to;
      $this->owner = $owner;
      $this->subject = $subject;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
