<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
//use League\Flysystem\Config;
use Config;

/**
delete from companies_users where user_id > 298;
delete from users where id > 298;
 */
class TalkToSaleMail extends Mailable
{
    // use Queueable, SerializesModels;

    public $email;
    public $first_name; 
    public $last_name;
    public $reason; 
    public $number_of_employees; 
    public $company;
    public $phone; 
    public $message_data; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $email=null,$first_name=null,$last_name=null,$reason=null,$number_of_employees=null,$company=null,$phone=null,$message=null )
    {
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->reason = $reason;
        $this->number_of_employees = $number_of_employees;
        $this->company = $company;
        $this->phone = $phone;
        $this->message_data = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.talktosale')->subject('StaffViz - Talk To Sale');
    }
}
