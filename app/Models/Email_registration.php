<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Email_registration extends Model
{
    use HasFactory;

    protected $table = 'email_registration';
    protected $primaryKey = "id";
    protected $fillable = ['title','name','email','domain','newsletter','permotion','type','visitor_ip','created_at','updated_at'];

    public function get_domain( $email )
    {
        $domain = explode('@',$email);
        $filter_domain = [
                            'gmail.com',
                            'googlemail.com',
                            'yahoo.com',
                            'protonmail.com',
                            'protonmail.ch',
                            'outlook.com',
                            'hotmail.com',
                            'yahoo.com',
                            'zoho.com',
                            'aol.com',
                            'aim.com',
                            'gmx.com',
                            'gmx.us',
                            'icloud.com',
                            'yandex.com'
                        ];
        if ( in_array( $domain[1], $filter_domain ) ) {
            return $this->get_domain_email( $email );
        }

        $sql = $this->where('domain',$domain[1])->where('type',1)->first();
        if ( !empty ( $sql ) ) {
            return true;
        }
        return false;
    }

    public function get_domain_email( $email )
    {
        $sql = $this->where('email',$email)->first();
        if ( !empty ( $sql ) ) {
            return true;
        }
        return false;
    }

    public function get_email( $email )
    {
        $sql = $this->where('email',$email)->first();
        if ( !empty ( $sql ) ) {
            // $this->updateEmail($sql->id);
            return $sql;
        }
        return false;
    }

    public function addContactEmail($data=[])
    {
        $domain = explode('@',$data['email']);
        $this->insert([
            'title' => $data['title'],
            'name' => $data['name'],
            'email' => $data['email'],
            'domain' => $domain[1],
            'newsletter' => $data['newsletter'],
            'type' => $data['type'],
            'visitor_ip' => $data['visitor_ip'],
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return true;
    }

    public function addGITEXContactEmail($data=[])
    {
        $domain = explode('@',$data['email']);
        $this->insert([
            'title' => $data['title'],
            'name' => $data['name'],
            'email' => $data['email'],
            'domain' => $domain[1],
            'newsletter' => $data['newsletter'],
            'type' => $data['type'],
            'visitor_ip' => $data['visitor_ip'],
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return true;
    }
    

    public function addEmail($data=[])
    {
        $domain = explode('@',$data['email']);
        $this->insert([
            'title' => $data['title'],
            'name' => $data['name'],
            'email' => $data['email'],
            'domain' => $domain[1],
            'newsletter' => $data['newsletter'],
            'type' => $data['type'],
            'visitor_ip' => $data['visitor_ip'],
            'created_at' => date('Y-m-d H:i:s')
        ]);
        $this->send_email_to_active_compaign($data['name'],$data['email'],$data['type']);
        return true;
    }

    public function updateEmail($id)
    {
        return $this->where('id',$id)->update([
            'newsletter' => 1,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function send_email_to_active_compaign($name,$email,$form=1)
    {
        $url = 'https://crecentechusa66904.api-us1.com';
        $apikey = '6353789dfadbb088e58b69e94e6968f37df69f80fed7aab84e6d8063e50c766767778e74';
        $params = array(
            // this is the action that adds a contact
            'api_action'   => 'contact_sync',
        
            // define the type of output you wish to get back
            // possible values:
            // - 'xml'  :      you have to write your own XML parser
            // - 'json' :      data is returned in JSON format and can be decoded with
            //                 json_decode() function (included in PHP since 5.2.0)
            // - 'serialize' : data is returned in a serialized format and can be decoded with
            //                 a native unserialize() function
            'api_output'   => 'json',
        );

        $formname = 'Early_Bird_Discount';
        if ( $form == 2 ) {
            $formname = 'Email_Subscription';
        }

        $post = [
                'first_name' => $name,
                'email' => $email,
                'form' => 'Form ' . $form,
                'tags' => $formname
            ];
        
        // This section takes the input fields and converts them to the proper format
        $query = "";
        foreach( $params as $key => $value ) $query .= urlencode($key) . '=' . urlencode($value) . '&';
        $query = rtrim($query, '& ');

        // This section takes the input data and converts it to the proper format
        $data = "";
        foreach( $post as $key => $value ) $data .= urlencode($key) . '=' . urlencode($value) . '&';
        $data = rtrim($data, '& ');

        // clean up the url
        $url = rtrim($url, '/ ');

        // This sample code uses the CURL library for php to establish a connection,
        // submit your request, and show (print out) the response.
        if ( !function_exists('curl_init') ) die('CURL not supported. (introduced in PHP 4.0.2)');

        // If JSON is used, check if json_decode is present (PHP 5.2.0+)
        if ( $params['api_output'] == 'json' && !function_exists('json_decode') ) {
            die('JSON not supported. (introduced in PHP 5.2.0)');
        }

        // define a final API request - GET
        $api = $url . '/admin/api.php?' . $query;

        $request = curl_init($api); // initiate curl object
        curl_setopt($request, CURLOPT_HTTPHEADER, array('API-TOKEN: ' . $apikey));  //  Provide the API Token via the API-TOKEN header
        curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
        curl_setopt($request, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
        //curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
        curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

        $response = (string)curl_exec($request); // execute curl post and store results in $response

        // additional options may be required depending upon your server configuration
        // you can find documentation on curl options at http://www.php.net/curl_setopt
        curl_close($request); // close curl object

        if ( !$response ) {
            die('Nothing was returned. Do you have a connection to Email Marketing server?');
        }

        // This line takes the response and breaks it into an array using:
        // JSON decoder
        $result = json_decode($response);
        // unserializer
        // $result = unserialize($response);
        // XML parser...
        // ...

        // Result info that is always returned
        // echo 'Result: ' . ( $result['result_code'] ? 'SUCCESS' : 'FAILED' ) . '<br />';
        // echo 'Message: ' . $result['result_message'] . '<br />';    

    }

    public function sentEmail($send)
    {
        $to = ["farzand.ali@crecentech.com"];//["bd-leads.07839654@ctbd.vsupport24by7com.podio.com" , "bd@crecentech.com"];
        $cc = ["m.ejaz@crecentech.com", "z.shahzad@crecentech.com"];
        foreach ($to as $recipient) {
            Mail::to($recipient)
              //  ->cc($cc)
                ->send($send);
        }
        return true;
    }

}
