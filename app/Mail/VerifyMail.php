<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
//use League\Flysystem\Config;
use Config;

/**
delete from companies_users where user_id > 298;
delete from users where id > 298;
 */
class VerifyMail extends Mailable
{
    // use Queueable, SerializesModels;

    public $id;
    //    public $project_name;
    public $remember_token;
    public $email;
    public $user_name;
    private $invitation_type;
    public $company_title;
    public $company_id;
    public $tth_web; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $invitation_type, $company)
    {
        
        $this->id = $user->id;
        $this->email = $user->email;
        $this->user_name = $user->first_name .' '.$user->last_name;
        $this->invitation_type = $invitation_type;
        // $this->company_title = $company->title;
        $this->company_id= $company->id;
        $this->remember_token = $user->remember_token;
        $this->tth_web = config('constant')['tth_web'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.'.$this->invitation_type)->subject('TaskTracker Hub(CrecenTech USA LLC) verification');
    }
}
