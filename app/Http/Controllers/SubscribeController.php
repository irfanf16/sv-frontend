<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Mail\EarlybirdMail;
use App\Mail\ContactMail;
use App\Mail\ChimpMail;
use App\Mail\GITEXContactMail;
use App\Models\Email_registration;
use App\Mail\VizbotEmail;


class SubscribeController extends Controller
{
    public function __construct()
    {
        // $this->middleware([
        //     'throttle:5,1' // About 5 requests per minute to Cotroller and error if there are too many requests
        // ]);
    }

    public function emailsend(Request $request)
    {
        $validation = [
            'early_name' => 'required|string|max:255',
            'early_email' => 'required|string|email|max:255',
            'agree_policy' => 'required|string|max:1',
        ];

        $validator = Validator::make($request->all(), $validation, $messages = [
            'early_name.required' => 'Please Fill Fullname Field.',
            'early_name.string' => 'The Full Name Must Only Contain Letters.',
            'agree_policy.required' => 'Please Confirm Your Acceptance Of Our Privacy Policy Before Proceeding.',
            'agree_policy.string' => 'Please Confirm Your Acceptance Of Our Privacy Policy Before Proceeding.',
            'early_email.required' => 'Please Fill Email Field.',
            'early_email.email' => 'Please Enter A Valid Email.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "responseCode" => "01",
                'errors' => $validator->errors()->messages(),
                'responseDescription' => 'Validation Failed.'
            ]);
        }

        $name = trim(strip_tags($request->early_name));
        $email = trim(strip_tags($request->early_email));
        $visitor_ip = trim(strip_tags($request->ip()));

        if ((new Email_registration())->get_domain($email) == true) {
            $ddd = explode('@', $email);
            $msg = 'Someone From "' . $ddd[1] . '" Has Already Requested For An Early Bird Access';
            return response()->json([
                "responseCode" => "01",
                'errors' => [[$msg]],
                'responseDescription' => 'Validation Failed.'
            ]);
        }

        (new Email_registration())->addEmail(['title' => 'Early Bird Email Registration', 'email' => $email, 'name' => $name, 'newsletter' => 0, 'type' => 1, 'visitor_ip' => $visitor_ip]);

        // Send the email
        $cc = ["m.ejaz@crecentech.com", "z.shahzad@crecentech.com"];
        // Mail::to(["bd-leads.07839654@ctbd.vsupport24by7com.podio.com"])
        //         ->cc($cc)
        //         ->send( new EarlybirdMail($name, $email) );
        Mail::to(["bd@crecentech.com"])
            ->send(new EarlybirdMail($name, $email));
        return response()->json(["responseCode" => "02", 'responseDescription' => 'Subscribed Successfully..!']);
    }

    public function contact_post(Request $request)
    {
        // $validatedData = $request->merge([
        //     'opt_in' => filter_var($request->get('opt_in'), FILTER_VALIDATE_BOOLEAN)
        // ]);
        // dd($request->all());

        $validation = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'number' => 'required',
            'opt_in' => 'required|accepted',
        ];

        $validator = Validator::make($request->all(), $validation, [
            'name.required' => 'Please Fill Your Name Field.',
            'email.string' => 'Please Fill Email Field',
            'number.required' => 'Please Fill Contact Number Field',
            'opt_in.accepted' => "Please check 'Opt In' condition",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "responseCode" => "01",
                'errors' => $validator->errors()->messages(),
                'responseDescription' => 'Validation Failed.'
            ]);
        }

        $name = trim(strip_tags($request->name));
        $email = trim(strip_tags($request->email));
        $number = trim(strip_tags($request->number));
        $website = trim(strip_tags($request->website));
        $message = trim(strip_tags($request->message));
        $opt_in = trim(strip_tags($request->opt_in));
        $visitor_ip = trim(strip_tags($request->ip()));

        if($opt_in){
            $opt_in = 'Yes';
        }
        $url_connector = 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/9c14a080-8c91-4a0e-beda-99fb42e44824'; // Default to null if the plan is not found
        $params=[ 'name' => $name,'email' => $email,'number'=>$number,'website'=>$website,'message'=>$message ];
        Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($url_connector, $params);
        (new Email_registration())->addContactEmail(['title' => 'Contact Us Form', 'email' => $email, 'name' => $name, 'newsletter' => 0, 'type' => 1, 'visitor_ip' => $visitor_ip]);

        // Send the email
        // $cc = ["m.ejaz@crecentech.com", "z.shahzad@crecentech.com"];
        // Mail::to(["bd-leads.07839654@ctbd.vsupport24by7com.podio.com"])
        //         ->cc($cc)
        //         ->send( new ContactMail($name, $email,$number, $website, $message,$opt_in) );
        Mail::to(["bd@crecentech.com"])
            ->send(new ContactMail($name, $email, $number, $website, $message,$opt_in));
        // Mail::to(["s.asif@crecentech.com"])
        //     ->send(new ContactMail($name, $email, $number, $website, $message,$opt_in));
        return response()->json(["responseCode" => "02", 'responseDescription' => 'Message Successfully Sent..!']);
    }
    public function gitex_contact_post(Request $request)
    {
        $validation = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'number' => 'required',
            'company' => 'required',
        ];
        // dd($request->company);
        $validator = Validator::make($request->all(), $validation, $messages = [
            'name.required' => 'Please Fill Your Name Field.',
            'email.string' => 'Please Fill Email Field',
            'number.required' => 'Please Fill Contact Number Field',
            'company.required' => 'Please Fill Company Field',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "responseCode" => "01",
                'errors' => $validator->errors()->messages(),
                'responseDescription' => 'Validation Failed.'
            ]);
        }

        $name = trim(strip_tags($request->name));
        $email = trim(strip_tags($request->email));
        $number = trim(strip_tags($request->number));
        $designation = trim(strip_tags($request->designation));
        $company = trim(strip_tags($request->company));
        $visitor_ip = trim(strip_tags($request->ip()));

        (new Email_registration())->addGITEXContactEmail(['title' => 'StaffViz GITEX Contact Us Form', 'email' => $email, 'name' => $name, 'newsletter' => 0, 'type' => 1, 'visitor_ip' => $visitor_ip]);

        $to = ['bd@crecentech.com']; // The main recipients
        // $to=['s.asif@crecentech.com','m.azam@crecentech.com'];
        // $to = 'farzand.ali@crecentech.com';
        $cc = ['m.ejaz@crecentech.com', 'z.shahzad@crecentech.com']; // CC addresses

        // Send the email
        $cc = ["m.ejaz@crecentech.com", "z.shahzad@crecentech.com"];
        Mail::to(["bd-leads.07839654@ctbd.vsupport24by7com.podio.com"])
            ->cc($cc)
            ->send(new GITEXContactMail($name, $email, $number, $designation, $company));
        Mail::to(["bd@crecentech.com"])
            ->send(new GITEXContactMail($name, $email, $number, $designation, $company));

        return response()->json(["responseCode" => "02", 'responseDescription' => 'Message Successfully Sent..!']);
    }


    public function emailsubscribe(Request $request)
    {

        $validation = [
            // 'early_name' => 'required|string|max:255',
            'early_email' => 'required|string|email|max:255',
            'subscribe_privacy_check' => 'required|string|max:1',
        ];

        $validator = Validator::make($request->all(), $validation, $messages = [
            // 'early_name.required' => 'Please fill Full Name field.',
            // 'early_name.string' => 'The Full Name must only contain letters.',
            'early_email.required' => 'Please Fill Email Field.',
            'early_email.email' => 'Please Enter A Valid Email.',
            'subscribe_privacy_check.required' => 'Please Confirm Your Acceptance Of Our Privacy Policy Before Proceeding.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "responseCode" => "01",
                'errors' => $validator->errors()->messages(),
                'responseDescription' => 'Validation Failed.'
            ]);
        }


        $email = trim(strip_tags($request->early_email));
        $name = explode('@', $email);
        $visitor_ip = trim(strip_tags($request->ip()));

        $url_connector = 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/bd1dd555-ec1f-4266-8ff7-2f72c9662328'; // Default to null if the plan is not found
                $params=['email' => $email];
                Http::withHeaders([
                    'Content-Type' => 'application/json',
                ])->post($url_connector, $params);

        $check_email = (new Email_registration())->get_email($email);

        if ($check_email !== false) {
            if ($check_email->newsletter == 0) {

                (new Email_registration())->updateEmail($check_email->id);
                return response()->json(["responseCode" => "02", 'responseDescription' => 'Subscribed Successfully..!']);
            } else {
                return response()->json([
                    "responseCode" => "01",
                    'errors' => [['Looks Like You Have Already Submitted Details From This Email Address']],
                    'responseDescription' => 'Validation Failed.'
                ]);
            }
        }

        (new Email_registration())->addEmail(['title' => 'Email Subscription', 'email' => $email, 'name' => $name[0], 'newsletter' => 1, 'type' => 2, 'visitor_ip' => $visitor_ip]);

        $cc = ["m.ejaz@crecentech.com", "z.shahzad@crecentech.com"];
        Mail::to(["bd-leads.07839654@ctbd.vsupport24by7com.podio.com"])
            ->cc($cc)
            ->send(new ChimpMail('', $request->early_email));
        Mail::to(["bd@crecentech.com"])
            ->send(new ChimpMail('', $request->early_email));

        return response()->json(["responseCode" => "02", 'responseDescription' => 'Subscribed successfully..!']);
    }

    public function privacy_policy(Request $request)
    {
        $data = [
            'meta_title' => 'StaffViz Privacy Policy: Your Data Security Guaranteed',
            'meta_descp' => 'Explore StaffViz`s privacy policy to understand how we protect your data. Learn about data collection,',
        ];
        return view('pages.privacy', ['data' => $data]);
    }
    public function vizbot_email(Request $request)
    {
        // Retrieve the HTML content from the request
        $vizbotHTML = $request->input('vizbot_html');
        $techinalFlag = $request->input('technical_flag');
        $clientName = $request->input('client_name');
        $clientEmail = $request->input('client_email');
        $clientPhone = $request->input('client_phone');
        $gradient = $request->input('gradient');

        // Temporarily set the SMTP configuration
        Config::set('mail.mailers.smtp.host', 'smtp.office365.com');
        Config::set('mail.mailers.smtp.port', 587);
        Config::set('mail.mailers.smtp.username', 'vizbot@staffviz.com');
        Config::set('mail.mailers.smtp.password', 'L@935065991940ot');
        Config::set('mail.mailers.smtp.encryption', 'tls');
        Config::set('mail.from.address', 'vizbot@staffviz.com');
        Config::set('mail.from.name', 'Vizbot');

        try {
            $recipients = [];
            if($techinalFlag==0){
                // Send the email using the configured SMTP settings'
                $recipients = ['staffviz-leads.1516e3c1@ctbd.vsupport24by7com.podio.com'];
                // $recipients = ['staffviz-leads.1516e3c1@ctbd.vsupport24by7com.podio.com','s.asif@crecentech.com'];
            }
            else{
                $recipients = ['support@staffviz.com',$clientEmail];
                // $recipients = ['support@staffviz.com',$clientEmail,'s.asif@crecentech.com'];
            }
            Mail::mailer('smtp')->to($recipients)
                ->send(new VizbotEmail($vizbotHTML,$clientName,$clientEmail,$clientPhone,$gradient));

            // Success Response
            return response()->json([
                "responseCode" => "02",
                "responseDescription" => "Message Successfully Sent..!"
            ], 200);

        } catch (\Exception $e) {
            // Failure Response
            return response()->json([
                "responseCode" => "01",
                "responseDescription" => "Failed to send email. Error: " . $e->getMessage()
            ], 500);
        }
    }
}
