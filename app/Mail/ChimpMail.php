<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
//use League\Flysystem\Config;
use Config;

/**
delete from companies_users where user_id > 298;
delete from users where id > 298;
 */
class ChimpMail extends Mailable
{
    // use Queueable, SerializesModels;

    public $early_name;
    public $early_email; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($early_name, $early_email)
    {
        
        $this->early_name = $early_name;
        $this->early_email = $early_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.earlybird')->subject('Email Subscription');
    }
}
