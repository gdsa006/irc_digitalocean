<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerNotificationEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $details2;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details2)
    {
        $this->details2 = $details2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Hi ' .$this->details2['fname'] . '. Your New Roof Estimate is $' . $this->details2['estimate'] . '.')->view('new.dashboard.customer-mail');
    }
}
