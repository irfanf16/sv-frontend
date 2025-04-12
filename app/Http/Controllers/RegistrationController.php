<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;
use App\Models\UserCompanies;
use App\Models\Instance;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class RegistrationController extends Controller
{
    public function __construct()
    {
        // $this->middleware([
        //     'throttle:5,1' // About 5 requests per minute to Cotroller and error if there are too many requests
        // ]);
    }
    public function create()
    {

        return view('registration.create', [
            'tth_web' => config('constant.tth_web'),
        ]);
    }

    public function success()
    {
        return view('registration.success');
    }

    public function store(Request $request)
    {

        $allowed_images = [
            'image/png',
            // 'image/jpg',
            // 'image/jpeg'
        ];

        $validation = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255|alpha_dash',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
            'phone' => 'required|min:6',
            'no_of_employee' => 'required|integer|not_in:0',
            'company_name' => 'required',
            'company_mask' => 'required|max:10|regex:/^[0-9A-Za-z\-\_]+$/',
            'company_initial' => 'required|max:10|min:2|alpha'
        ];

        $validator = Validator::make($request->all(), $validation, $messages = [
            'unique' => 'The :attribute field has already exists. Please <a href="' . env("tth_web") . '/login"><b>Login</b></a>.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "responseCode" => "01",
                'errors' => $validator->errors()->messages(),
                'responseDescription' => 'Validation Failed.'
            ]);
        }

        $company_logo_json = json_decode($request->input('logo'));
        if ($company_logo_json) {
            if (!in_array($company_logo_json->type, $allowed_images)) {
                return response()->json([
                    "responseCode" => "01",
                    'errors' => [
                        'logo' => [
                            ".png images allowed only."
                        ]
                    ],
                    'responseDescription' => 'Validation Failed.'
                ]);
            }
            // Check to see if any PHP files are trying to be uploaded
            if (preg_match('/\<\?php/i', $company_logo_json->data)) {
                return response()->json([
                    "responseCode" => "01",
                    'errors' => [
                        'logo' => [
                            "Looks like invalid image.",
                        ]
                    ],
                    'responseDescription' => 'Validation Failed.'
                ]);
            }
        }

        $instance = Instance::latest()->first();
        $instance_id = $instance ? $instance->id : 1;

        $user = new User();
        $user->email = $request['email'];
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->password = Hash::make($request['password']);
        $user->app_password = $this->decryptAppPassword($request['password'],$request['email']);
        $user->phone = $request['phone'];
        $user->save();

        $super_admin_id = $user->id; // session('user_id');

        $company = new Company();
        $company->title = $request->input('company_name');
        $company->emp_code_format = $request->input('company_mask');
        $company->super_admin_id = $super_admin_id;
        $company->no_of_employee = $request->input('no_of_employee');
        // $company->company_initial = strtolower($request->input('company_initial'));
        $company->instance_id = $instance_id;
        $company->save();
        $company->company_initial = strtolower($request->input('company_initial')) . '_' . $company->id;
        $company->save();

        $uc = new UserCompanies();
        $uc->user_id = $super_admin_id;
        $uc->company_id =  $company->id;
        $uc->status = 'deactive';
        $uc->is_employee = 1;
        $uc->profile_id = 1;
        $uc->profile_name = 'Admin';
        $uc->profile_type = 'Admin';
        $uc->is_deleted = 0;
        $uc->save();

        // Save Image
        if($company_logo_json) {
            $tth_apis_url = config('constant.tth_web') . 'api/company_image';
            $post_image = [
                'company_id' => $company->id,
                'image' => $company_logo_json->data,
                'image_quality' => 70
            ];


            $response = Http::withHeaders([
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Accept'     => 'application/json',
                'token'      => config('constant.INTERNAL_SYSTEM_COMMUNICATION'),
            ])->asForm()->post($tth_apis_url, $post_image);
           // dd($response, $response->status(), json_decode($response->getBody(), true) );
        }


        $post = [
            'user_id' => $super_admin_id,
            'company_id' => $company->id,
            'password' => $request['password'],
            'logo' => $company_logo_json,
        ];
        // Generate Email
        $apiURL = config('constant.tth_web') . 'api/registration/varification_email';

//        dd("yes", $apiURL, $post);

        Log::debug(json_encode(array_merge([
            'url', $apiURL,
        ], $post)));

        $response = Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept'     => 'application/json',
            'token'      => config('constant.INTERNAL_SYSTEM_COMMUNICATION'),
        ])->asForm()->post($apiURL, $post);

        Log::debug($response);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);


        if ($statusCode == 200) {
            // $user->remember_token = $responseBody['data']['token'];
            if ($responseBody['responseCode'] == 00) {
                // Mail::to($user->email)->send(new VerifyMail($user, 'verify', $uc));
                // return redirect('register/success')
                //     ->with('message', 'We have sent a verification email at your email address. Please varify email address.');
                return response()->json([
                    'responseCode' => '00',
                    'responseDescription' => 'success',
                    'redirect' => url('register/success'),
                    'message' => 'We have sent a verification email at your email address. Please verify email address.'
                ]);
            } else {
                return response()->json([
                    'responseCode' => '01',
                    'responseDescription' => 'error',
                    'redirect' => url('register/error'),
//                    'message' => 'Error during verification Email. Please click here.'
                    'message' => $responseBody
                ]);
                // return redirect('register/error')->with('message', 'Error during verification Email. Please click here.');
            }
        }

        /*return response()->json([
            'responseCode' => '01',
            'responseDescription' => 'error',
            'redirect' => url('register/error'),
            'error_message'=> json_decode($response->getBody(), true),
            'message' => 'Error during verification Email. Please click here.'
        ]);*/
        // return redirect('register/error')->with('message', 'Error during varification Email. Please click here.');
    }

    public  function decryptAppPassword($value, $email){

        $key=$email.'::'.$value;
        $query= DB::select( 'SELECT AES_ENCRYPT(? , md5(?)) as app_pass',[$value,$key]);
        if (count($query) > 0) {
            return $query[0]->app_pass;
        }

    }

}
