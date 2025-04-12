<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\PricesController;
use App\Mail\TalkToSaleMail;
use App\Models\Email_registration;
use Illuminate\Support\Facades\Mail;

class CompanyRegistrationController extends Controller
{

    public function company_register(Request $request, $price_id)

    {

        $plans = Cache::store('file')->get('plans');
        if (empty($plans)) {
            (new PricesController())->getPlans();
            $plans = Cache::store('file')->get('plans');
        }
        $selected_plan=PricesController::findPriceId($plans, $price_id);

        if (empty($plans) || empty($selected_plan)) {
          return redirect('/');
        }
        $data = [
            'meta_title' => 'StaffViz - Company Registration',
            'meta_descp' => '',
        ];

        if (getenv('APP_IMAGE_ENVIRONMENT') == 's3') {
            $image_path = getenv('AWS_LIVE_API_URL');
        } else {
            $image_path = getenv('ADMIN_PORTAL_IMAGES');
        }

       $hide_card_details=isset($selected_plan['price']['unit_amount']) && $selected_plan['price']['unit_amount'] == 0  ? true: false;
        return view('theme.web.company-register', [
            'data' => $data,
            'price_id' => $price_id,
            'image_path' => $image_path,
            'hide_card_details' => $hide_card_details,
            'selected_plan' => $selected_plan,

        ]);
    }

    public function companyPayment($enc_data)
    {
        $data = [
            'meta_title' => 'StaffViz - Company Registration',
            'meta_descp' => '',
        ];

        $dec_data=$this->decrypt($enc_data);
        $company_id = $dec_data['company_id'];
        $response = Http::withHeaders(
            ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION')]
        )->acceptJson()
        ->timeout(300) // Setting the timeout to 60 seconds
        ->get(getenv('ADMIN_PORTAL_API') . '/staffviz/company/' . $company_id . '/owner', []);
        if ($response->successful()) {
            $res = $response->json();
            if ($res && $res['subscription_id'] == null) {
                (new PricesController())->getPlans(true);
                $jsonData = json_encode(['id' => $res['price_id']]);
                $newEncrypter = new \Illuminate\Encryption\Encrypter(getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN'), Config::get('app.cipher'));
                $price_id = $newEncrypter->encryptString($jsonData);

                if (getenv('APP_IMAGE_ENVIRONMENT') == 's3') {
                    $image_path = getenv('AWS_LIVE_API_URL');
                } else {
                    $image_path = getenv('ADMIN_PORTAL_IMAGES');
                }

                $plans = Cache::store('file')->get('plans');
                if (empty($plans)) {
                    $this->getPlans();
                    $plans = Cache::store('file')->get('plans');
                }
                $selected_plan=PricesController::findPriceId($plans, $price_id);
                $hide_card_details=isset($selected_plan['price']['unit_amount']) && $selected_plan['price']['unit_amount'] == 0  ? true: false;

                return view('theme.web.company-payment', [

                    'data' => $data,
                    'user_id' => $res['user_id'],
                    'email' => $res['email'],
                    'first_name' => $res['first_name'],
                    'last_name' => $res['last_name'],
                    'plan_id' => $res['plan_id'],
                    'price_id' => $price_id ,
                    'title' => $res['title'],
                    'company_id' => $res['id'],
                    'formation_type' => $res['formation_type'],
                    'image_path' => $image_path,
                    'hide_card_details' => $hide_card_details,
                    'selected_plan' => $selected_plan,
                ]);
            }
            return redirect('/');
        } else {
            return redirect('/');
        }
    }


    // verify user to perform action

    public function allowUserToPerformAction($email){

        $response = $this->getData('staffviz/verify-user-with-company-exist', ['email' =>$email], 'post');
        $create_new_company = true;

        if (!empty($response)) {
            $companies = $response['companies'];
                foreach ($companies as $company) {
                    if ($company['plan_staus'] != 'active') {
                        $create_new_company = false;
                    }
                }
        }

        return $create_new_company;

    }

    public function verifyUser(Request $request)
    {
        $request->validate([
            'data' => 'required'
        ]);

        $data=$this->decrypt($request->data);
        if(!$data['email']){
            abort(404);
        }

        $response = $this->getData('staffviz/verify-user-with-company-exist', ['email' => $data['email']], 'post');
        if (!empty($response)) {
            $user = $response['user'];
            $user_already_exist = $response['user_already_exist'];
            $res=[
                'status' => true,
                'user' => $user,
                'user_already_exist' => $user_already_exist,
            ];

            $enc_data=$this->encrypt($res);
            return response()->json([
                'data' => $enc_data
            ]);
        } else {
            $res=[
                'status' => false,
            ];

            $enc_data=$this->encrypt($res);
            return response()->json([
                'data' => $enc_data
            ]);
        }
    }
    public function authenticateUser(Request $request)
    {
        $request->validate([
            'data' => 'required'
        ]);

        $data=$this->decrypt($request->data);
        if(!$data['email']){
            abort(404);
        }
        $response = $this->getData('staffviz/authenticate-user', ['email' => $data['email'], 'password' => $data['password']], 'post');

        if (!empty($response)) {
            $user = $response['user'];
            $companies = $response['companies'];
            $company_with_plan = [];
            $create_new_company = true;

            $plans = Cache::store('file')->get('plans');
            if (empty($plans)) {
                $this->getPlans();
                $plans = Cache::store('file')->get('plans');
            }

            if (!empty($plans)) {
                foreach ($companies as $company) {

                    if ($company['plan_staus'] != 'active') {
                        $create_new_company = false;
                    }
                    $res=[
                        'id' => $company['price_id'],
                    ];

                    $enc_data=$this->encrypt($res);
                    $company_with_plan[] = [
                        'company' => $company,
                        'company_plan' => PricesController::findPriceId($plans, $enc_data),
                    ];
                }
            }

            if (getenv('APP_IMAGE_ENVIRONMENT') == 's3') {
                $image_path = getenv('AWS_LIVE_API_URL');
            } else {
                $image_path = getenv('ADMIN_PORTAL_IMAGES');
            }
            if ($create_new_company == true) {

                $trials = view('theme.web.new_company_add', [
                    'user' => $user,
                    'companies' => $company_with_plan,
                    'create_new_company' => $create_new_company,
                    'image_path' => $image_path,
                ])->render();
            } else {


                $trials = view('theme.web.old_company_list', [
                    'user' => $user,
                    'companies' => $company_with_plan,
                    'create_new_company' => $create_new_company,
                    'image_path' => $image_path,
                ])->render();
            }


            return response()->json([
                'status' => true,
                'trials' => $trials,
                'user' => $user
            ]);
        } else {
            return response()->json([
                'status' => false
            ]);
        }
    }
    public function addUser(Request $request)
    {


        // $request->validate([
        //     'email' => 'required',
        //     'firstName' => 'nullable',
        //     'lastName' => 'nullable',
        //     'password' => 'required',
        // ]);

        $request->validate([
            'data' => 'required'
        ]);

        $data=$this->decrypt($request->data);
        if(!$data['email']){
            abort(404);
        }


        $params = [
            'email' => $data['email'],
            'first_name' => $data['firstName'],
            'last_name' =>$data['lastName'],
            'password' => $data['password'],
        ];

        if ( $data['user_id'] != null) {
            $response = Http::withHeaders(
                ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $data['user_id']]
            )->acceptJson()
            ->timeout(300) // Setting the timeout to 60 seconds
            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user/' . $data['user_id'], $params);

            if ($response->successful()) {
                $response = $response->json();
            } else {
                $response = [];
            }
        } else {
            $response = $this->getData('staffviz/user', $params, 'post');
        }
        if (!empty($response)) {

            $res=[
                'status' => true,
                'user_id' => $response['user']['id'],
            ];

            $enc_data=$this->encrypt($res);
            return response()->json([
                'data' => $enc_data
            ]);

            // return response()->json([
            //     'status' => true,
            //     'user_id' => $response['user']['id'],
            //     // 'company_id' => $response['company_id'],
            //     // 'stripe_customer_id' => $stripe_customer_id
            // ]);
        } else {
            $res=[
                'status' => false,
            ];

            $enc_data=$this->encrypt($res);
            return response()->json([
                'data' => $enc_data
            ]);
            // return response()->json([
            //     'status' => false
            // ]);
        }
    }
    public function talkToSales(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'firstName' => 'required',
            'number_of_employees' => 'required',
            'companyName' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $params = [
            'email' => $request->email,
            'first_name' => $request->firstName,
            'last_name' => '.',
            'reason' => '0',
            'number_of_employees' => $request->number_of_employees,
            'company' => $request->companyName,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        

        $url_connector = 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/96bbb22a-6625-40e4-b24d-cae850d03b84'; // Default to null if the plan is not found
        Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($url_connector, $params);


        $response = Http::withHeaders(
            ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION')]
        )->acceptJson()
        ->timeout(300) // Setting the timeout to 60 seconds
        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/talk_to_sales', $params);

        if ($response->successful()) {
            $response = $response->json();

            $cc = ["m.ejaz@crecentech.com", "z.shahzad@crecentech.com"];
            Mail::to(["bd-leads.07839654@ctbd.vsupport24by7com.podio.com"])
                    ->cc($cc)
                    ->send(new TalkToSaleMail($request->email,$request->firstName,'',0,$request->number_of_employees,$request->companyName,$request->phone,$request->message));
            Mail::to(["bd@crecentech.com"])
                    ->send(new TalkToSaleMail($request->email,$request->firstName,'',0,$request->number_of_employees,$request->companyName,$request->phone,$request->message));

            return response()->json([
                'status' => true
            ]);
        } else {
            return response()->json([
                'status' => false
            ]);
        }
    }

    public function getData($endPoint, $params, $method)
    {

        $response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION')])
            ->acceptJson()
            ->timeout(300) // Setting the timeout to 60 seconds
            ->{$method}(getenv('ADMIN_PORTAL_API') . '/' . $endPoint, $params);
        // dd($response->body());
        if ($response->successful()) {
            return $response->json();
        } else {
            return [];
        }
    }

     // $data =json_encode(['data' => $data]); // Data to encrypt
        // $key = env('ENCRYPTION_KEY_FOR_AGENT_LOGIN'); // Your encryption key
        // $iv = random_bytes(16); // Generate a random initialization vector (IV)
        // $cipher =Config::get('app.cipher');
        // $encryptedData = openssl_encrypt($data, $cipher, $key, 0, $iv);
        // $encryptedDataWithIv = base64_encode($iv . $encryptedData); // Prepend the IV to the encrypted data
        // return $encryptedDataWithIv;


    public function encrypt($data){

        $jsonData = json_encode( $data);
        $newEncrypter = new Encrypter(getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN'), Config::get('app.cipher'));
        $enc_data = $newEncrypter->encryptString($jsonData);
        return $enc_data;

    }

    public function decrypt($data){
        try {
            $newEncrypter = new \Illuminate\Encryption\Encrypter(getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN'), Config::get('app.cipher'));
            $dec_data = $newEncrypter->decryptString($data);
            $data = json_decode($dec_data, 1);
           return $data;
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Decryption failed', ['message' => $e->getMessage(), 'data' => $data]);
            return ['error' => 'Decryption failed', 'message' => $e->getMessage()];
        }
    }
}
