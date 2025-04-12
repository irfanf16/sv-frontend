<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
//use League\Flysystem\Config;
use Config;

/**
delete from companies_users where user_id > 298;
delete from users where id > 298;
 */
class GITEXContactMail extends Mailable
{
    // use Queueable, SerializesModels;

    public $name;
    public $email; 
    public $number;
    public $designation; 
    public $company; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email=null,$number=null, $designation=null, $company=null )
    {
        
        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
        $this->designation = $designation;
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.gitex-contact')->subject('StaffViz - GITEX Contact Us Form');
    }
}
