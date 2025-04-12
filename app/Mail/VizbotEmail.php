<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use DateTime;
use DateTimeZone; // Add this line to import the DateTime class

//use League\Flysystem\Config;
use Config;

/**
delete from companies_users where user_id > 298;
delete from users where id > 298;
 */
class VizbotEmail extends Mailable
{
    // use Queueable, SerializesModels;

    public $vizbot_html;
    public $client_name;
    public $client_email;
    public $client_phone;
    public $gradient;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $vizbot_html,$client_name,$client_email,$client_phone,$gradient )
    {
        $this->vizbot_html = $vizbot_html;
        $this->client_name = $client_name;
        $this->client_email = $client_email;
        $this->client_phone = $client_phone;
        $this->gradient = $gradient;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $estTimezone = new DateTimeZone('America/New_York');
        $currentDateTime = new DateTime('now', $estTimezone);
        $formattedDate = $currentDateTime->format('M jS Y');
        $formattedTime = $currentDateTime->format('H:i:s T');
        $formattedDateTime = $formattedDate . ' ended at ' . $formattedTime;

        return $this->view('emails.vizbot_email')
                    ->subject('VizBot Chat with '.$this->client_name.' on '.$formattedDateTime);
    }
}
