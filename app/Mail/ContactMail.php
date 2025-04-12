<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
//use League\Flysystem\Config;
use Config;

/**
delete from companies_users where user_id > 298;
delete from users where id > 298;
 */
class ContactMail extends Mailable
{
    // use Queueable, SerializesModels;

    public $name;
    public $email; 
    public $number;
    public $website; 
    public $msg; 
    public $opt_in; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email=null,$number=null, $website=null, $message=null,$opt_in=null )
    {
        
        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
        $this->website = $website;
        $this->msg = $message;
        $this->opt_in = $opt_in;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')->subject('Contact Us Form');
    }
}
