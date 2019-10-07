<?php

namespace Modules\PortalAdmin\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateEventEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $company;
    public $event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($company, $event)
    {
        $this->company = $company;
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('scancode@scancode.com.br', 'Scancode System')->subject('Acesso ao portal para o evento '.$this->event->name)->view('portaladmin::emails.create_event');
    }
}
