<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\User;
use App\Models\ReferrCount;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $subject;
    public $view;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $user, $view)
    {
        $this->subject = $subject;
        $this->user = $user;
        $this->view = $view;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject($this->subject)->from('admin@diklatonline.id', 'LPKN Training Center')
            ->view($this->view);
    }
}
