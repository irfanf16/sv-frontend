<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Stevebauman\Location\Facades\Location;
class PricesController extends Controller
{
    public function __construct() {}

    public function getLocation($ip)
    {
        try {
            $address = '';
            $location = Location::get($ip);
            if($location) {
                $address = "{$location->cityName}, {$location->regionName} {$location->zipCode}, {$location->countryName}";
            }
            if(empty($address)) {
                $response = Http::get("http://ip-api.com/json/{$ip}");
                if ($response->successful()) {
                    $location = $response->object();
                    if(isset($location->status) && $location->status == 'fail') {
                        $address = "Location not found against ip = $ip .Reason: $location->message";
                    } else {
                        $address = "{$location->city}, {$location->regionName} {$location->zip}, {$location->country}";
                    }

                }
            }
            if(empty($address)) {
                $address = "Location not found against ip = $ip";
            }


        } catch (\Exception $ex) {
            $address = $ex->getMessage();
        }
        return $address;
    }

    public function prices()
    {
        $data = [
            'meta_title' => 'StaffViz Pricing Plans | Affordable and Flexible',
            'meta_descp' => "Start with StaffViz's free plan or uncapped trial and discover powerful features to enhance workforce productivity. Upgrade anytime for more tools!",
        ];

        $addons = [];
        $plans = [];
        // $plans = Cache::store('file')->get('plans');
        // $addons = Cache::store('file')->get('addons');
        // if (empty($plans)) {
        $this->getPlans();
        $plans = Cache::store('file')->get('plans');
        $categoryFeatures = Cache::store('file')->get('categoryFeatures');
        $addons = Cache::store('file')->get('addons');
        // }



        if (getenv('APP_IMAGE_ENVIRONMENT') == 's3') {
            $image_path = getenv('AWS_LIVE_API_URL');
        } else {
            $image_path = getenv('ADMIN_PORTAL_IMAGES');
        }

        return view('theme.pricing', [
            'data' => $data,
            'plans' => $plans,
            'categoryFeatures' => $categoryFeatures,
            'addons' => $addons,
            'image_path' => $image_path
        ]);
    }

    public function getPlans($all_data = false)
    {

        $categories = [];
        $products = [];
        $features = [];
        $plans = [];
        $addons = [];
        $categoryFeatures = [];

        $getProducts = $this->getData('local/internal-user-products', ['limit' => 1000000], 'post');
        if (!empty($getProducts)) {
            $products = $getProducts['data'];
        }

        if (!$all_data) {
            $getCategories = $this->getData('local/internal-user-categories', ['limit' => 100], 'post');
        } else {

            $getCategories = $this->getData('local/internal-user-categories', ['limit' => 100], 'post');
        }


        if (!empty($getCategories)) {
            $categories = $getCategories['categories']['data'];
        }

        $getCategoryFeatures = $this->getData('local/category-features', [], 'get');
        if (!empty($getCategoryFeatures)) {
            $categoryFeatures = $getCategoryFeatures['category_features'];
        }



        $getFeatures = $this->getData('local/internal-user-features', ['limit' => 1000], 'get');
        if (!empty($getFeatures)) {
            $features = $getFeatures['features']['data'];
            usort($features, function ($a, $b) {
                return $a['sort_by'] <=> $b['sort_by']; // Sorting in ascending order
            });
        }
        foreach ($products as $pro) {
            $pro = $pro['product'];
            if (isset($pro['metadata']) && $pro['metadata']['type'] == 'addons') {
                $addons[] = $pro;
            }
        }
        foreach ($categories as $cat) {
            $plans[$cat['id']] = [
                'category_id' => $cat['id'],
                "title" => $cat['title'],
                "description" => $cat['description'],
                "proration" =>  $cat['proration'],
                "price_type" =>  $cat['price_type'],
                "discount_type" =>  $cat['discount_type'],
                "published" =>  $cat['published'],
                "price_type" =>  $cat['price_type'],
            ];

            $categoryFeaturesForCategory = [];
            foreach ($categoryFeatures as $f) {
                if ($f['category_id'] == $cat['id']) {
                    $categoryFeaturesForCategory[] = $f;
                }
            }


            foreach ($cat['frequency'] as $fre) {

                if ($fre == 'month') {
                    $fre = 'monthly';
                } elseif ($fre == 'year') {
                    $fre = 'yearly';
                }

                foreach ($products as $pro) {

                    $sort_by = isset($pro['sort_by']) ? $pro['sort_by'] : 0;
                    $pro = $pro['product'];
                    if (isset($pro['metadata']) && isset($pro['metadata']['category']) && $pro['metadata']['category'] ==  $cat['id'] && $pro['metadata']['type'] == 'plans') {

                        foreach ($pro['prices'] as $pro_prices) {

                            // dump($pro_prices);
                            if (isset($pro_prices['recurring']) && isset($pro_prices['recurring']['interval'])) {


                                $unit_amount = isset($pro_prices['tiers'][0]) ? $pro_prices['tiers'][0]['flat_amount'] / 100 : $pro_prices['unit_amount'] / 100;

                                if ($pro_prices['recurring']['interval_count'] == 3) {
                                    $type_of_price = 'quarterly';
                                    $unit_amount = $unit_amount / 3;
                                } elseif ($pro_prices['recurring']['interval_count'] == 6) {
                                    $type_of_price = 'bi-annually';
                                    $unit_amount = $unit_amount / 6;
                                } else {
                                    $type_of_price = $pro_prices['recurring']['interval'];
                                    if ($type_of_price == 'month') {
                                        $type_of_price = 'monthly';
                                    } elseif ($type_of_price == 'year') {
                                        $type_of_price = 'yearly';
                                        $unit_amount = $unit_amount / 12;
                                    }
                                }


                                if ($type_of_price == $fre) {
                                    $features_matching = [];
                                    $addons_matching =  [];

                                    if (isset($pro['metadata']['module_features_list'])) {
                                        $module_features_list = $pro['metadata']['module_features_list'];
                                        $module_features_array = explode(',', $module_features_list);
                                        foreach ($features as $feature) {
                                            if (in_array($feature['id'], $module_features_array) && $feature['type'] == 1) {
                                                $features_matching[] = $feature;
                                            }
                                        }
                                    }

                                    if (isset($pro['metadata']['addons'])) {
                                        $module_addons_list = $pro['metadata']['addons'];
                                        $module_addons_array = explode(',', $module_addons_list);
                                        foreach ($addons as $addon) {
                                            if (in_array($addon['id'], $module_addons_array)) {
                                                $addons_matching[] = $addon;
                                            }
                                        }
                                    }

                                    $res = [
                                        'id' => $pro_prices['id'],
                                    ];
                                    $enc_data = (new CompanyRegistrationController())->encrypt($res);

                                    $product = [
                                        'id' => $pro['id'],
                                        'name' => $pro['name'],
                                        'description' => $pro['description'],
                                        'category_id' => $pro['metadata']['category'],
                                        'trial_period_days' => isset($pro['metadata']['trial_period_days']) ?  $pro['metadata']['trial_period_days'] : '0',
                                        'trial_period_value' => isset($pro['metadata']['trial_period_value']) ?  $pro['metadata']['trial_period_value'] : 'day',
                                        'freq' => $fre,
                                        'type_of_price' => $type_of_price,
                                        'base_price' => $pro['metadata']['base_price'],
                                        'is_popular' => isset($pro['metadata']['is_popular']) ? $pro['metadata']['is_popular'] : 0,
                                        'public' => isset($pro['metadata']['public']) ? $pro['metadata']['public'] : 0,
                                        'images' => $pro['images']


                                    ];

                                    $price = [
                                        'p_id' => $pro_prices['id'],
                                        'id' => $enc_data,
                                        'currency' => $pro_prices['currency'],
                                        'unit_amount' => $unit_amount,
                                        'maximum_users' => isset($pro['metadata']['maximum_users']) ? $pro['metadata']['maximum_users'] : 0,
                                        'minimum_users' => isset($pro['metadata']['minimum_users']) ? $pro['metadata']['minimum_users'] : 0,
                                    ];

                                    $plans[$cat['id']]['frequency'][$fre][] = [

                                        'sort_by' => $sort_by,
                                        'product' => $product,
                                        'price' => $price,
                                        'addons' => $addons_matching,
                                        'features' => $features_matching,
                                        'categoryFeaturesForCategory' => $categoryFeaturesForCategory,
                                    ];
                                }
                            }
                        }
                    }
                }


            }
        }

        $order = ['monthly', 'quarterly', 'bi-annually', 'yearly'];

        // Loop through each item in the data array
        foreach ($plans as $key => $item) {
            // Reorder frequency array for each item

            $reorderedFrequency = [];
            foreach ($order as $frequencyKey) {
                if (isset($item['frequency'][$frequencyKey])) {
                    // Sort by 'sort_by' within the current frequency
                    usort($item['frequency'][$frequencyKey], function ($a, $b) {
                        return $a['sort_by'] <=> $b['sort_by'];
                    });
                    $reorderedFrequency[$frequencyKey] = $item['frequency'][$frequencyKey];
                }
            }

            // Update the item's frequency with the reordered array
            $plans[$key]['frequency'] = $reorderedFrequency;
        }
        Cache::store('file')->put('plans', $plans);
        Cache::store('file')->put('categoryFeatures', $categoryFeatures);
        Cache::store('file')->put('addons', $addons);
    }







    public function getData($endPoint, $params, $method)
    {

        $response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION')])
            ->acceptJson()
            ->timeout(300) // Setting the timeout to 60 seconds
            ->{$method}(getenv('ADMIN_PORTAL_API') . '/' . $endPoint, $params);
        if ($response->successful()) {
            return $response->json();
        } else {
            return [];
        }
    }

    public function getSelectedPlan(Request $request)
    {

        $request->validate([
            'data' => 'required'
        ]);

        $data = (new CompanyRegistrationController())->decrypt($request->data);
        if (!$data['price_id']) {
            return response()->json([
                'status' => false,
            ]);
        }
        $price_id = $data['price_id'];
        $old_user = $data['old_user'];
        $formation_type = isset($data['formation_type']) ? $data['formation_type'] : null;
        $plans = Cache::store('file')->get('plans');
        if (empty($plans)) {
            $this->getPlans();
            $plans = Cache::store('file')->get('plans');
        }

        if (!empty($plans)) {
            $result = $this->findPriceId($plans, $price_id);

            if ($result !== null) {

                $string = view('theme.web.plan_detail', [
                    'product' => $result,
                    'plans' => $plans,
                    'old_user' => $old_user,
                    'formation_type' => $formation_type,

                ])->render();

                return response()->json([
                    'status' => true,
                    "data" => $string,
                ]);
            } else {
                return response()->json([
                    'status' => false,
                ]);
            }
        }
    }
    static function findPriceId($data, $targetPriceId)
    {

        $dec_data = (new CompanyRegistrationController())->decrypt($targetPriceId);
        $p_id = $dec_data['id'];
        foreach ($data as $item) {
            if (isset($item['frequency'])) {
                foreach ($item['frequency'] as $timeFrame) {
                    foreach ($timeFrame as $product) {

                        if (isset($product['price']['id'])) {
                            $dec_data = (new CompanyRegistrationController())->decrypt($product['price']['id']);
                            $pp_id = $dec_data['id'];

                            if ($pp_id === $p_id) {
                                return $product;
                            }
                        }
                    }
                }
            }
        }
        return null; // If price ID is not found
    }

    function paymentCardIntent(Request $request)
    {

        $request->validate([
            'data' => 'required'
        ]);

        $data = (new CompanyRegistrationController())->decrypt($request->data);
        if (!$data['email']) {
            abort(404);
        }
        $user_id = $data['user_id'];
        $email = $data['email'];
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $update_payment_method = $data['update_payment_method'];
        $price_id = $data['price_id'];
        $company_title = $data['company_title'];
        $subscription_id = $data['subscription_id'];
        $company_price_id = $data['company_price_id'];
        $company_type = $data['company_type'];
        $data_company_id = $data['data_company_id'];
        $os_info = isset($data['os_info']) ? $data['os_info'] : '';
        $location = isset($data['location']) ? $data['location'] : '';
        $ip_address = $request->ip();
        $ip_address = $request->header('X-Forwarded-For');
        if (!$ip_address) {
            $ip_address = $request->ip();
        }
        Log::info("Ip Address X-Forwarded-for" . $request->header('X-Forwarded-For'));
        Log::info("Ip Address" . $request->ip());


        if (isset($data['company_create_by_user']) && $company_type == 'ncr') {
            $allowUserToPerformAction = (new CompanyRegistrationController())->allowUserToPerformAction($email);
            if (!$allowUserToPerformAction) {
                return response()->json([
                    'status' => false,
                ]);
            }
        }


        $customerResponse = Http::withHeaders(
            ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' =>  $user_id]
        )->acceptJson()
            ->timeout(300) // Setting the timeout to 60 seconds
            ->post(getenv('ADMIN_PORTAL_API') . '/customers', [
                "email" => $email,
                "name" => $firstName . ' ' . $lastName,

            ]);


        if ($customerResponse->successful()) {

            $customer = $customerResponse->json();
            $stripe_customer_id = '';
            $user_cards_list = [];
            if (isset($customer['customer']['id'])) {
                $stripe_customer_id = $customer['customer']['id'];
            }

            if ($stripe_customer_id) {
                $user_card_response = Http::withHeaders(
                    ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                )->acceptJson()
                    ->timeout(300) // Setting the timeout to 60 seconds
                    ->get(getenv('ADMIN_PORTAL_API') . '/staffviz/customer/' . $stripe_customer_id . '/payment_methods', []);
                if ($user_card_response->successful()) {
                    $user_card_response_data = $user_card_response->json();
                    if (isset($user_card_response_data['payment_methods'])) {
                        $user_cards_list = $user_card_response_data['payment_methods']['data'];
                    }
                }
            }

            $data = [
                'stripe_customer_id' => $stripe_customer_id,
                'price_id' => $price_id,
                'email' => $email,
                'user_id' => $user_id,
                'company_title' => $company_title,
                'subscription_id' => $subscription_id,
                'company_price_id' => $company_price_id,
                'company_type' => $company_type,
                'company_id' => $data_company_id,
                'os_info' => $os_info,
                'location' => $location,
                'ip_address' => $ip_address,
            ];
            $enc_data = (new CompanyRegistrationController())->encrypt($data);

            if ($update_payment_method == 'new_card' && empty($user_cards_list) || $update_payment_method == 'old_card_to_new_card') {

                $response = Http::withHeaders(
                    ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                )->acceptJson()
                    ->timeout(300) // Setting the timeout to 60 seconds
                    ->post(getenv('ADMIN_PORTAL_API') . '/stripe/setupintent', [
                        'customer_id' => $stripe_customer_id,
                        // 'company_id' => $request->company_id
                    ]);
                $responseData = $response->json();
                if (isset($responseData['setupIntents'])) {
                    session(['setupIntents' => $responseData['setupIntents']]);
                    $intents = $responseData['setupIntents'];
                    $string = view('theme.web.payment_card_intent', [
                        'intents' => $intents,
                        'enc_data' => $enc_data,
                        'user_cards_list' => $user_cards_list,
                        'company_type' => $company_type,

                    ])->render();

                    return response()->json([
                        'status' => true,
                        "card_payment_intent" => $string,

                    ]);
                }
            } else {


                $string = view('theme.web.payment_card_list', [
                    'user_cards_list' => $user_cards_list,
                    'enc_data' => $enc_data,
                ])->render();

                return response()->json([
                    'status' => true,
                    "card_payment_intent" => $string,

                ]);
            }
        }

        return response()->json([
            'status' => false,

        ]);
    }
    public function confirmReturn(Request $request)
    {
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        try {

            $data = (new CompanyRegistrationController())->decrypt($request->enc_data);
            if (!$data['email']) {
                abort(404);
            }
            $coupon = $request->coupon ?? '';
            $stripe_customer_id = trim($data['stripe_customer_id']);
            $user_id = trim($data['user_id']);
            $email = trim($data['email']);
            $company_type = trim($data['company_type']);
            $company_title = trim($data['company_title']);
            $subscription_id = trim($data['subscription_id']);
            $enc_company_price_id = trim($data['company_price_id']);
            $company_id = trim($data['company_id']);
            $enc_data = trim($data['price_id']);
            $newEncrypter = new \Illuminate\Encryption\Encrypter(getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN'), Config::get('app.cipher'));
            $dec_data = $newEncrypter->decryptString($enc_data);
            $dec_data = json_decode($dec_data, 1);
            $price_id = $dec_data['id'];
            $os_info = trim($data['os_info']);
            $location = trim($data['location']);
            $ip_address = trim($data['ip_address']);
            $company_price_id = '';
            if ($enc_company_price_id) {
                $compnewEncrypter = new \Illuminate\Encryption\Encrypter(getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN'), Config::get('app.cipher'));
                $com_dec_data = $compnewEncrypter->decryptString($enc_company_price_id);
                $com_dec_data = json_decode($com_dec_data, 1);
                $company_price_id = $com_dec_data['id'];
            }
            $old_setup_intent = session('setup_intent');
            if ($old_setup_intent != $request->setup_intent) {
                if ($request->redirect_status == 'succeeded') {
                    session(['setup_intent' => $request->setup_intent]);

                    $setup_intent_response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                        ->acceptJson()
                        ->timeout(300) // Setting the timeout to 60 seconds
                        ->post(getenv('ADMIN_PORTAL_API') . '/stripe/setupintent/confirm', [
                            'id' => $request->setup_intent,
                            'stripe_customer_id' => $stripe_customer_id
                        ]);
                    if ($setup_intent_response->successful()) {
                        // $setup_intent_response_status = $setup_intent_response->json();

                        if ($company_type == 'ncr') {  //new_company_register

                            // here company create

                            $company_creation = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/add-company-web', [
                                    'owner_email' => $email,
                                    'owner_name' => $email,
                                    'company_title' => $company_title,
                                    'formation_type' => 'web',
                                    "plan_id" => 0,
                                    "message" => "Click the button below to access your company. This system comes up with many amazing features. Start your journey today to stand out tomorrow!"

                                ]);

                            if ($company_creation->successful()) {

                                $company_data = $company_creation->json();
                                $data = [
                                    'price_ids' => [$price_id],
                                    'stripe_customer_id' => $stripe_customer_id,
                                    'user_id' => $user_id,
                                    'company_id' => $company_data['company']['id'],
                                ];

                                // Add the coupon only if it exists
                                if ($coupon) {
                                    $data['discounts'] = [
                                        [
                                            'coupon' => $coupon
                                        ]
                                    ];
                                }

                                $subscription_response = Http::withHeaders([
                                    'token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'),
                                    'user-id' => $user_id
                                ])
                                    ->acceptJson()
                                    ->timeout(300) // Setting the timeout to 300 seconds
                                    ->post(getenv('ADMIN_PORTAL_API') . '/stripe/subscription/create', $data);


                                if ($subscription_response->successful()) {

                                    // $responseData = $subscription_response->json();
                                    $company_child_creation = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                        ->acceptJson()
                                        ->timeout(300) // Setting the timeout to 60 seconds
                                        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/childcompany/store', [
                                            'company_id' => $company_data['company']['id'],
                                            'company_title' => $company_title,
                                            'ip_address' => $ip_address,
                                            'ip_location' => $this->getLocation($ip_address),
                                        ]);
                                    if ($company_child_creation->successful()) {


                                        $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                            ->acceptJson()
                                            ->timeout(300)
                                            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                                'user_id' =>  $user_id,
                                                'ip_address' => $ip_address,
                                                'os_info' => $os_info,
                                                'location' => $location,
                                                'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                                'terms_details' => $this->terms_details(),
                                            ]);
                                        if ($term_condition->successful()) {
                                            $data = [
                                                'meta_title' => 'StaffViz - Company Registration',
                                                'meta_descp' => '',
                                                'stripe_customer_id' => $stripe_customer_id
                                            ];

                                            return view('theme.web.success', [
                                                'data' => $data,
                                            ]);
                                        } else {
                                            $stripe_res = $term_condition->json();
                                            $minutes = 10; // Cookie expiration time in minutes
                                            $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong term_condition';
                                            // Set a cookie with the message
                                            Cookie::queue('message', $message, $minutes);
                                            Cookie::queue('email', $request->email, $minutes);
                                            return redirect()->back();
                                        }
                                    } else {

                                        $stripe_res = $company_child_creation->json();
                                        $minutes = 10; // Cookie expiration time in minutes
                                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong company_child_creation';
                                        // Set a cookie with the message
                                        Cookie::queue('message', $message, $minutes);
                                        Cookie::queue('email', $request->email, $minutes);
                                        return redirect()->back();
                                    }
                                } else {

                                    $company_child_delete = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                        ->acceptJson()
                                        ->timeout(300) // Setting the timeout to 60 seconds
                                        ->delete(getenv('ADMIN_PORTAL_API') . '/staffviz/company/' . $company_data['company']['id'] . '/' . $user_id, []);
                                    if ($company_child_delete->successful()) {

                                        $user_card_response = Http::withHeaders(
                                            ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                        )->acceptJson()
                                            ->timeout(300) // Setting the timeout to 60 seconds
                                            ->get(getenv('ADMIN_PORTAL_API') . '/staffviz/customer/' . $stripe_customer_id . '/payment_methods', []);
                                        if ($user_card_response->successful()) {

                                            $user_card_response_data = $user_card_response->json();
                                            if (isset($user_card_response_data['payment_methods'])) {
                                                $user_cards_list = $user_card_response_data['payment_methods']['data'];

                                                usort($user_cards_list, function ($a, $b) {
                                                    return $b['created'] - $a['created'];
                                                });
                                                if (isset($user_cards_list[0])) {
                                                    $delete_card = Http::withHeaders(
                                                        ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                                    )->acceptJson()
                                                        ->timeout(300) // Setting the timeout to 60 seconds
                                                        ->delete(getenv('ADMIN_PORTAL_API') . '/staffviz/payment_methods/' . $user_cards_list[0]['id'], []);

                                                    if ($delete_card->successful()) {
                                                        $stripe_res = $subscription_response->json();
                                                        $minutes = 10; // Cookie expiration time in minutes
                                                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                                        // Set a cookie with the message
                                                        Cookie::queue('message', $message, $minutes);
                                                        Cookie::queue('email', $request->email, $minutes);
                                                        return redirect()->back();
                                                    }
                                                }
                                            }
                                        }
                                    } else {
                                        $stripe_res = $company_child_delete->json();
                                        $minutes = 10; // Cookie expiration time in minutes
                                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                        // Set a cookie with the message
                                        Cookie::queue('message', $message, $minutes);
                                        Cookie::queue('email', $request->email, $minutes);
                                        return redirect()->back();
                                    }
                                }
                            } else {
                                $stripe_res = $company_creation->json();
                                $minutes = 10; // Cookie expiration time in minutes
                                $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong company_creation';
                                // Set a cookie with the message
                                Cookie::queue('message', $message, $minutes);
                                Cookie::queue('email', $request->email, $minutes);
                                return redirect()->back();
                            }
                        } elseif ($company_type == 'tta') {  // trailing_to_active


                            if ($subscription_id) {

                                if ($price_id == $company_price_id) {  // active trail with some plan

                                    $trailing_to_active = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                        ->acceptJson()
                                        ->timeout(300) // Setting the timeout to 60 seconds
                                        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/stripe/subscription/' . $subscription_id, [
                                            'trial_end' => 'now'
                                        ]);

                                    if ($trailing_to_active->successful()) {

                                        $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                            ->acceptJson()
                                            ->timeout(300)
                                            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                                'user_id' =>  $user_id,
                                                'ip_address' => $ip_address,
                                                'os_info' => $os_info,
                                                'location' => $location,
                                                'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                                'terms_details' => $this->terms_details(),
                                            ]);
                                        if ($term_condition->successful()) {
                                            $data = [
                                                'meta_title' => 'StaffViz - Company Registration',
                                                'meta_descp' => '',
                                                'stripe_customer_id' => $stripe_customer_id
                                            ];

                                            return view('theme.web.success', [
                                                'data' => $data,
                                            ]);
                                        } else {
                                            $stripe_res = $term_condition->json();
                                            $minutes = 10; // Cookie expiration time in minutes
                                            $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong term_condition';
                                            // Set a cookie with the message
                                            Cookie::queue('message', $message, $minutes);
                                            Cookie::queue('email', $request->email, $minutes);
                                            return redirect()->back();
                                        }
                                    } else {

                                        $user_card_response = Http::withHeaders(
                                            ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                        )->acceptJson()
                                            ->timeout(300) // Setting the timeout to 60 seconds
                                            ->get(getenv('ADMIN_PORTAL_API') . '/staffviz/customer/' . $stripe_customer_id . '/payment_methods', []);
                                        if ($user_card_response->successful()) {

                                            $user_card_response_data = $user_card_response->json();
                                            if (isset($user_card_response_data['payment_methods'])) {
                                                $user_cards_list = $user_card_response_data['payment_methods']['data'];

                                                usort($user_cards_list, function ($a, $b) {
                                                    return $b['created'] - $a['created'];
                                                });
                                                if (isset($user_cards_list[0])) {
                                                    $delete_card = Http::withHeaders(
                                                        ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                                    )->acceptJson()
                                                        ->timeout(300) // Setting the timeout to 60 seconds
                                                        ->delete(getenv('ADMIN_PORTAL_API') . '/staffviz/payment_methods/' . $user_cards_list[0]['id'], []);
                                                }
                                            }
                                        }

                                        $stripe_res = $trailing_to_active->json();
                                        $minutes = 10; // Cookie expiration time in minutes
                                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                        // Set a cookie with the message
                                        Cookie::queue('message', $message, $minutes);
                                        Cookie::queue('email', $request->email, $minutes);
                                        return redirect()->back();
                                    }
                                } else {    // active trail with different plan

                                    $trailing_to_active_with_new_plan = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                        ->acceptJson()
                                        ->timeout(300) // Setting the timeout to 60 seconds
                                        ->put(getenv('ADMIN_PORTAL_API') . '/staffviz/stripe/update/subscription_items/' . $subscription_id, [
                                            "user_id" => $user_id,
                                            "trial_period_days" => 0,
                                            "price_ids" => [$price_id]
                                        ]);
                                    if ($trailing_to_active_with_new_plan->successful()) {

                                        $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                            ->acceptJson()
                                            ->timeout(300)
                                            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                                'user_id' =>  $user_id,
                                                'ip_address' => $ip_address,
                                                'os_info' => $os_info,
                                                'location' => $location,
                                                'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                                'terms_details' => $this->terms_details(),
                                            ]);
                                        if ($term_condition->successful()) {
                                            $data = [
                                                'meta_title' => 'StaffViz - Company Registration',
                                                'meta_descp' => '',
                                                'stripe_customer_id' => $stripe_customer_id
                                            ];

                                            return view('theme.web.success', [
                                                'data' => $data,
                                            ]);
                                        } else {
                                            $stripe_res = $term_condition->json();
                                            $minutes = 10; // Cookie expiration time in minutes
                                            $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong term_condition';
                                            // Set a cookie with the message
                                            Cookie::queue('message', $message, $minutes);
                                            Cookie::queue('email', $request->email, $minutes);
                                            return redirect()->back();
                                        }
                                    } else {

                                        $user_card_response = Http::withHeaders(
                                            ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                        )->acceptJson()
                                            ->timeout(300) // Setting the timeout to 60 seconds
                                            ->get(getenv('ADMIN_PORTAL_API') . '/staffviz/customer/' . $stripe_customer_id . '/payment_methods', []);
                                        if ($user_card_response->successful()) {

                                            $user_card_response_data = $user_card_response->json();
                                            if (isset($user_card_response_data['payment_methods'])) {
                                                $user_cards_list = $user_card_response_data['payment_methods']['data'];

                                                usort($user_cards_list, function ($a, $b) {
                                                    return $b['created'] - $a['created'];
                                                });
                                                if (isset($user_cards_list[0])) {
                                                    $delete_card = Http::withHeaders(
                                                        ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                                    )->acceptJson()
                                                        ->timeout(300) // Setting the timeout to 60 seconds
                                                        ->delete(getenv('ADMIN_PORTAL_API') . '/staffviz/payment_methods/' . $user_cards_list[0]['id'], []);
                                                }
                                            }
                                        }

                                        $stripe_res = $trailing_to_active_with_new_plan->json();
                                        $minutes = 10; // Cookie expiration time in minutes
                                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                        // Set a cookie with the message
                                        Cookie::queue('message', $message, $minutes);
                                        Cookie::queue('email', $request->email, $minutes);
                                        return redirect()->back();
                                    }
                                }
                            }
                        } elseif ($company_type == 'eta') {


                            $subscription_response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->post(getenv('ADMIN_PORTAL_API') . '/stripe/subscription/create', [
                                    'price_ids' => [$price_id],
                                    'stripe_customer_id' => $stripe_customer_id,
                                    'user_id' => $user_id,
                                    'company_id' => $company_id,
                                    // "trial_period_days" => 0,
                                ]);

                            if ($subscription_response->successful()) {

                                $subscription_data = $subscription_response->json();
                                $active_company_trail = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                    ->acceptJson()
                                    ->timeout(300) // Setting the timeout to 60 seconds
                                    ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/stripe/subscription/' . $subscription_data['subscription']['id'], [
                                        'trial_end' => 'now'
                                    ]);
                                if ($active_company_trail->successful()) {


                                    $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                        ->acceptJson()
                                        ->timeout(300)
                                        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                            'user_id' =>  $user_id,
                                            'ip_address' => $ip_address,
                                            'os_info' => $os_info,
                                            'location' => $location,
                                            'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                            'terms_details' => $this->terms_details(),
                                        ]);
                                    if ($term_condition->successful()) {
                                        $data = [
                                            'meta_title' => 'StaffViz - Company Registration',
                                            'meta_descp' => '',
                                            'stripe_customer_id' => $stripe_customer_id
                                        ];

                                        return view('theme.web.success', [
                                            'data' => $data,
                                        ]);
                                    } else {
                                        $stripe_res = $term_condition->json();
                                        $minutes = 10; // Cookie expiration time in minutes
                                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong term_condition';
                                        // Set a cookie with the message
                                        Cookie::queue('message', $message, $minutes);
                                        Cookie::queue('email', $request->email, $minutes);
                                        return redirect()->back();
                                    }
                                } else {
                                    $user_card_response = Http::withHeaders(
                                        ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                    )->acceptJson()
                                        ->timeout(300) // Setting the timeout to 60 seconds
                                        ->get(getenv('ADMIN_PORTAL_API') . '/staffviz/customer/' . $stripe_customer_id . '/payment_methods', []);
                                    if ($user_card_response->successful()) {

                                        $user_card_response_data = $user_card_response->json();
                                        if (isset($user_card_response_data['payment_methods'])) {
                                            $user_cards_list = $user_card_response_data['payment_methods']['data'];

                                            usort($user_cards_list, function ($a, $b) {
                                                return $b['created'] - $a['created'];
                                            });
                                            if (isset($user_cards_list[0])) {
                                                $delete_card = Http::withHeaders(
                                                    ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                                )->acceptJson()
                                                    ->timeout(300) // Setting the timeout to 60 seconds
                                                    ->delete(getenv('ADMIN_PORTAL_API') . '/staffviz/payment_methods/' . $user_cards_list[0]['id'], []);
                                            }
                                        }
                                    }
                                    $stripe_res = $active_company_trail->json();
                                    $minutes = 10; // Cookie expiration time in minutes
                                    $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                    // Set a cookie with the message
                                    Cookie::queue('message', $message, $minutes);
                                    Cookie::queue('email', $request->email, $minutes);
                                    return redirect()->back();
                                }
                            } else {

                                $user_card_response = Http::withHeaders(
                                    ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                )->acceptJson()
                                    ->timeout(300) // Setting the timeout to 60 seconds
                                    ->get(getenv('ADMIN_PORTAL_API') . '/staffviz/customer/' . $stripe_customer_id . '/payment_methods', []);
                                if ($user_card_response->successful()) {

                                    $user_card_response_data = $user_card_response->json();
                                    if (isset($user_card_response_data['payment_methods'])) {
                                        $user_cards_list = $user_card_response_data['payment_methods']['data'];

                                        usort($user_cards_list, function ($a, $b) {
                                            return $b['created'] - $a['created'];
                                        });
                                        if (isset($user_cards_list[0])) {
                                            $delete_card = Http::withHeaders(
                                                ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                            )->acceptJson()
                                                ->timeout(300) // Setting the timeout to 60 seconds
                                                ->delete(getenv('ADMIN_PORTAL_API') . '/staffviz/payment_methods/' . $user_cards_list[0]['id'], []);
                                        }
                                    }
                                }
                                $stripe_res = $subscription_response->json();
                                $minutes = 10; // Cookie expiration time in minutes
                                $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                // Set a cookie with the message
                                Cookie::queue('message', $message, $minutes);
                                Cookie::queue('email', $request->email, $minutes);
                                return redirect()->back();
                            }
                        } elseif ($company_type == 'ancr') { // admin new company create


                            $data = [
                                'price_ids' => [$price_id],
                                'stripe_customer_id' => $stripe_customer_id,
                                'user_id' => $user_id,
                                'company_id' =>  $company_id
                            ];

                            // Add the coupon only if it exists
                            if ($coupon) {
                                $data['discounts'] = [
                                    [
                                        'coupon' => $coupon
                                    ]
                                ];
                            }

                            $subscription_response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->post(getenv('ADMIN_PORTAL_API') . '/stripe/subscription/create', $data);

                            if ($subscription_response->successful()) {
                                $company_db_creation = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION')])
                                    ->acceptJson()
                                    ->timeout(300) // Setting the timeout to 60 seconds
                                    ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/childcompany/store', [
                                        'company_id' => $company_id,
                                        "title" => $company_title,
                                        'ip_address' => $ip_address,
                                        'ip_location' => $this->getLocation($ip_address),
                                    ]);

                                if ($company_db_creation->successful()) {
                                    $company_data = $company_db_creation->json();


                                    $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                        ->acceptJson()
                                        ->timeout(300)
                                        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                            'user_id' =>  $user_id,
                                            'ip_address' => $ip_address,
                                            'os_info' => $os_info,
                                            'location' => $location,
                                            'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                            'terms_details' => $this->terms_details(),
                                        ]);
                                    if ($term_condition->successful()) {
                                        $data = [
                                            'meta_title' => 'StaffViz - Company Registration',
                                            'meta_descp' => '',
                                            'stripe_customer_id' => $stripe_customer_id
                                        ];

                                        return view('theme.web.success', [
                                            'data' => $data,
                                        ]);
                                    } else {
                                        $stripe_res = $term_condition->json();
                                        $minutes = 10; // Cookie expiration time in minutes
                                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong term_condition';
                                        // Set a cookie with the message
                                        Cookie::queue('message', $message, $minutes);
                                        Cookie::queue('email', $request->email, $minutes);
                                        return redirect()->back();
                                    }
                                } else {

                                    $stripe_res = $company_db_creation->json();
                                    $minutes = 10; // Cookie expiration time in minutes
                                    $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong company_child_creation';
                                    // Set a cookie with the message
                                    Cookie::queue('message', $message, $minutes);
                                    Cookie::queue('email', $request->email, $minutes);
                                    return redirect()->back();
                                }
                            } else {

                                $user_card_response = Http::withHeaders(
                                    ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                )->acceptJson()
                                    ->timeout(300) // Setting the timeout to 60 seconds
                                    ->get(getenv('ADMIN_PORTAL_API') . '/staffviz/customer/' . $stripe_customer_id . '/payment_methods', []);
                                if ($user_card_response->successful()) {

                                    $user_card_response_data = $user_card_response->json();
                                    if (isset($user_card_response_data['payment_methods'])) {
                                        $user_cards_list = $user_card_response_data['payment_methods']['data'];

                                        usort($user_cards_list, function ($a, $b) {
                                            return $b['created'] - $a['created'];
                                        });
                                        if (isset($user_cards_list[0])) {
                                            $delete_card = Http::withHeaders(
                                                ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id]
                                            )->acceptJson()
                                                ->timeout(300) // Setting the timeout to 60 seconds
                                                ->delete(getenv('ADMIN_PORTAL_API') . '/staffviz/payment_methods/' . $user_cards_list[0]['id'], []);
                                        }
                                    }
                                }
                                $stripe_res = $subscription_response->json();
                                $minutes = 10; // Cookie expiration time in minutes
                                $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                // Set a cookie with the message
                                Cookie::queue('message', $message, $minutes);
                                Cookie::queue('email', $request->email, $minutes);
                                return redirect()->back();
                            }
                        }
                    } else {
                        $stripe_res = $setup_intent_response->json();
                        $minutes = 10; // Cookie expiration time in minutes
                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong setup_intent_response';
                        // Set a cookie with the message
                        Cookie::queue('message', $message, $minutes);
                        Cookie::queue('email', $request->email, $minutes);
                        return redirect()->back();
                    }
                }
            }
            return redirect('/');
        } catch (\Exception $e) {

            $minutes = 10; // Cookie expiration time in minutes
            $message = "SubscribeController:Line Number:" . $e->getLine() . '  ' . $e->getMessage();
            // Set a cookie with the message
            Cookie::queue('message', $message, $minutes);
            Cookie::queue('email', $request->email, $minutes);
            return redirect()->back();
        }
    }

    public function terms_details()
    {
        return '<p style="margin-bottom:10px;">By accessing or using StaffViz, you agree to be bound by these Terms and Conditions ("Terms"). If you disagree with any part of these terms, you must not proceed further.</p>
            <p style="margin-bottom:10px;"><b>Billing and Payment</b></p>
            <p style="margin-bottom:10px;">By subscribing to a paid plan, you agree to our billing terms and acknowledge that prices may be subject to change. All payments will be billed on a recurring basis and processed in U.S. dollars.</p>
            <p style="margin-bottom:10px;">StaffViz accepts various payment methods, each subject to specific rules and terms provided during the transaction process. Moreover, we reserve the right to add or remove payment methods and will notify you in case of any changes.</p>
            <p style="margin-bottom:10px;"><b>User Responsibilities</b></p>
            <p style="margin-bottom:10px;">Users are responsible for the accuracy and legality of their transactions, including verifying customer identities and managing transaction receipts, refunds, chargebacks, and other related activities. Users must ensure compliance of their goods and services with all applicable laws and regulations.</p>
            <p style="margin-bottom:10px;"><b>Security and Compliance</b></p>
            <p style="margin-bottom:10px;">StaffViz implements advanced security protocols to protect user data. While we strive to maintain a secure environment, users are encouraged to exercise caution. Compliance with applicable financial regulations is strictly enforced. Any breach may result in immediate suspension or termination of services.</p>
            <p style="margin-bottom:10px;"><b>Subscription and Fees</b></p>
            <p style="margin-bottom:10px;">Subscriptions are billed either monthly, quarterly or annually, based on the user’s selection during the subscription setup. Fees must be paid in advance, and all billing information must be accurate and complete. StaffViz reserves the right to change fees or payment policies. Users will be notified before any change.</p>
            <p style="margin-bottom:10px;">Subscriptions automatically renew under the same conditions unless the user cancels before the renewal date. Users can cancel their subscriptions through the billing section. Prepaid fees for services beyond the current billing cycle are generally nonrefundable.</p>
            <p style="margin-bottom:10px;"><b>Payment Failure and Suspension</b></p>
            <p style="margin-bottom:10px;">Payments for StaffViz services are to be made in advance based on the selected subscription plan. In case of a failed payment, we will attempt to process the payment again within a grace period of 7 days. If the payment is not successfully processed within this grace period, StaffViz holds the right to suspend the Services until payment is received.</p>
            <p style="margin-bottom:10px;"><b>Cancellation and Data Retention</b></p>
            <p style="margin-bottom:10px;">If you cancel your subscription during the trial period, your data will not be retained, and all access to your account will be terminated. Moreover, for paid subscribers who fail to pay within the grace period, access to the software will be terminated, allowing access only to the billing module. If payment is not made during this period, the subscription will be canceled, and data will be retained for 90 days before the permanent removal. StaffViz is not liable for any data loss due to non-payment.</p>
            <p style="margin-bottom:10px;"><b>User Charges</b></p>
            <p style="margin-bottom:10px;">Clients will be charged for the number of users specified in the selected plan at the end of the trial period, regardless of actual usage. For example, if the plan is for four users, the client will be charged for four users even if only two users were added.</p>
            <p style="margin-bottom:10px;"><b>User Management</b></p>
            <p style="margin-bottom:10px;">Users can be added to the payment plan from a predefined list, and the subscription cost will be based on the number of users added during the billing cycle. Additional users can be added via the billing module, and any adjustments due to service downgrades or cancellations will be reflected in the next billing cycle.</p>
            <p style="margin-bottom:10px;"><b>Dispute Resolution</b></p>
            <p style="margin-bottom:10px;">Any disputes arising from your use of StaffViz will be resolved through binding arbitration in accordance with current arbitration rules.</p>
            <p style="margin-bottom:10px;"><b>Amendments</b></p>
            <p style="margin-bottom:10px;">We may update these Terms occasionally. Your continuous use of StaffViz after changes will be taken as your consent to these revised terms. This document constitutes the entire agreement between you and StaffViz regarding your use of the service.</p>
            <p style="margin-bottom:10px;"><b>Termination</b></p>
            <p style="margin-bottom:10px;">We may terminate or suspend your access to StaffViz without prior notice for violating these Terms. Upon termination, you will lose the right to use the Services immediately.</p>
            <p style="margin-bottom:10px;"><b>Severability</b></p>
            <p style="margin-bottom:10px;">If any part of these Terms is held invalid or unenforceable, the remaining provisions will continue to be valid and enforceable.</p>
            <p style="margin-bottom:10px;">If you have any questions about these Terms, please contact us at support@staffviz.com</p>
            <p style="margin-bottom:10px;">By using StaffViz, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.</p>';
    }

    public function paymentConfirmFromOldCard(Request $request)
    {
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        try {

            $data = (new CompanyRegistrationController())->decrypt($request->enc_data);
            if (!$data['email']) {
                abort(404);
            }
            $coupon = $request->coupon ?? '';
            $stripe_customer_id = trim($data['stripe_customer_id']);
            $user_id = trim($data['user_id']);
            $email = trim($data['email']);
            $owner_name = $request['firstName'] . ' ' . $request['lastName'];
            $company_type = trim($data['company_type']);
            $company_title = trim($data['company_title']);
            $subscription_id = trim($data['subscription_id']);
            $enc_company_price_id = trim($data['company_price_id']);
            $company_id = trim($data['company_id']);
            $enc_data = trim($data['price_id']);
            $card_id = $request->card_id;
            $newEncrypter = new \Illuminate\Encryption\Encrypter(getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN'), Config::get('app.cipher'));
            $dec_data = $newEncrypter->decryptString($enc_data);
            $dec_data = json_decode($dec_data, 1);
            $price_id = $dec_data['id'];
            $os_info = trim($data['os_info']);
            $location = trim($data['location']);
            $ip_address = trim($data['ip_address']);
            $company_price_id = '';
            if ($enc_company_price_id) {
                $compnewEncrypter = new \Illuminate\Encryption\Encrypter(getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN'), Config::get('app.cipher'));
                $com_dec_data = $compnewEncrypter->decryptString($enc_company_price_id);
                $com_dec_data = json_decode($com_dec_data, 1);
                $company_price_id = $com_dec_data['id'];
            }
            $enc_data_id = session('enc_data');
            if ($enc_data_id != $request->enc_data) {



                $default_payment_method = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                    ->acceptJson()
                    ->timeout(300) // Setting the timeout to 60 seconds
                    ->post(getenv('ADMIN_PORTAL_API') . '/customers', [
                        'email' => $email,
                        'invoice_settings' => [
                            'default_payment_method' => $card_id
                        ]
                    ]);

                if ($default_payment_method->successful()) {

                    if ($company_type == 'ncr') {  //new_company_register

                        // here company create
                        $company_creation = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                            ->acceptJson()
                            ->timeout(300) // Setting the timeout to 60 seconds
                            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/add-company-web', [
                                'owner_email' => $email,
                                'owner_name' => $owner_name,
                                'company_title' => $company_title,
                                'plan_id' => 0,
                                'formation_type' => 'web', // web is fixed type for company creation from website
                                'message' => 'Click the button below to access your company. This system comes up with many amazing features. Start your journey today to stand out tomorrow!'
                            ]);


                        if ($company_creation->successful()) {
                            $company_data = $company_creation->json();

                            $data = [
                                'price_ids' => [$price_id],
                                'stripe_customer_id' => $stripe_customer_id,
                                'user_id' => $user_id,
                                'company_id' => $company_data['company']['id']
                            ];

                            // Add the coupon only if it exists
                            if ($coupon) {
                                $data['discounts'] = [
                                    [
                                        'coupon' => $coupon
                                    ]
                                ];
                            }
                            $subscription_response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->post(getenv('ADMIN_PORTAL_API') . '/stripe/subscription/create', $data);

                            if ($subscription_response->successful()) {

                                // $responseData = $subscription_response->json();
                                $company_child_creation = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                    ->acceptJson()
                                    ->timeout(300) // Setting the timeout to 60 seconds
                                    ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/childcompany/store', [
                                        'company_id' => $company_data['company']['id'],
                                        'company_title' => $company_title,
                                        'ip_address' => $ip_address,
                                        'ip_location' => $this->getLocation($ip_address),
                                    ]);
                                if ($company_child_creation->successful()) {

                                    $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                        ->acceptJson()
                                        ->timeout(300)
                                        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                            'user_id' =>  $user_id,
                                            'ip_address' => $ip_address,
                                            'os_info' => $os_info,
                                            'location' => $location,
                                            'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                            'terms_details' => $this->terms_details(),
                                        ]);

                                    if ($term_condition->successful()) {
                                        session(['enc_data' => $request->enc_data]);
                                        return response()->json([
                                            'status' => true,
                                            'stripe_customer_id' => $stripe_customer_id,
                                        ]);
                                    } else {
                                        session()->forget('enc_data');
                                        return response()->json([
                                            'status' => false,
                                            'message' => $term_condition->body()
                                        ]);
                                    }
                                } else {
                                    session()->forget('enc_data');
                                    return response()->json([
                                        'status' => false,
                                        'message' => $company_child_creation->body()
                                    ]);
                                }
                            } else {

                                $company_child_delete = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                    ->acceptJson()
                                    ->timeout(300) // Setting the timeout to 60 seconds
                                    ->delete(getenv('ADMIN_PORTAL_API') . '/staffviz/company/' . $company_data['company']['id'] . '/' . $user_id, []);
                                if ($company_child_delete->successful()) {
                                    $stripe_res = $subscription_response->json();
                                    $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                    session()->forget('enc_data');
                                    return response()->json([
                                        'status' => false,
                                        'message' => $message
                                    ]);
                                } else {
                                    session()->forget('enc_data');
                                    return response()->json([
                                        'status' => false,
                                        'message' => $company_child_delete->body()
                                    ]);
                                }
                                session()->forget('enc_data');
                                return response()->json([
                                    'status' => false,
                                    'message' => $subscription_response->body()
                                ]);
                            }
                        } else {
                            session()->forget('enc_data');
                            return response()->json([
                                'status' => false,
                                'message' => $company_creation->body()
                            ]);
                        }
                    } elseif ($company_type == 'tta') {  // trailing_to_active


                        if ($subscription_id) {

                            if ($price_id == $company_price_id) {  // active trail with some plan

                                $trailing_to_active = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                    ->acceptJson()
                                    ->timeout(300) // Setting the timeout to 60 seconds
                                    ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/stripe/subscription/' . $subscription_id, [
                                        'trial_end' => 'now'
                                    ]);

                                if ($trailing_to_active->successful()) {

                                    $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                        ->acceptJson()
                                        ->timeout(300)
                                        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                            'user_id' =>  $user_id,
                                            'ip_address' => $ip_address,
                                            'os_info' => $os_info,
                                            'location' => $location,
                                            'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                            'terms_details' => $this->terms_details(),
                                        ]);

                                    if ($term_condition->successful()) {
                                        session(['enc_data' => $request->enc_data]);
                                        return response()->json([
                                            'status' => true,
                                            'stripe_customer_id' => $stripe_customer_id,
                                        ]);
                                    } else {
                                        session()->forget('enc_data');
                                        return response()->json([
                                            'status' => false,
                                            'message' => $term_condition->body()
                                        ]);
                                    }
                                } else {

                                    $stripe_res = $trailing_to_active->json();
                                    $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                    session()->forget('enc_data');
                                    return response()->json([
                                        'status' => false,
                                        'message' => $message
                                    ]);
                                }
                            } else {    // active trail with different plan

                                $trailing_to_active_with_new_plan = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                    ->acceptJson()
                                    ->timeout(300) // Setting the timeout to 60 seconds
                                    ->put(getenv('ADMIN_PORTAL_API') . '/staffviz/stripe/update/subscription_items/' . $subscription_id, [
                                        "user_id" => $user_id,
                                        "trial_period_days" => 0,
                                        "price_ids" => [$price_id]
                                    ]);
                                if ($trailing_to_active_with_new_plan->successful()) {


                                    $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                        ->acceptJson()
                                        ->timeout(300)
                                        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                            'user_id' =>  $user_id,
                                            'ip_address' => $ip_address,
                                            'os_info' => $os_info,
                                            'location' => $location,
                                            'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                            'terms_details' => $this->terms_details(),
                                        ]);

                                    if ($term_condition->successful()) {
                                        session(['enc_data' => $request->enc_data]);
                                        return response()->json([
                                            'status' => true,
                                            'stripe_customer_id' => $stripe_customer_id,
                                        ]);
                                    } else {
                                        session()->forget('enc_data');
                                        return response()->json([
                                            'status' => false,
                                            'message' => $term_condition->body()
                                        ]);
                                    }
                                } else {

                                    $stripe_res = $trailing_to_active_with_new_plan->json();
                                    $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                    return response()->json([
                                        'status' => false,
                                        'message' => $message
                                    ]);
                                }
                            }
                        }
                    } elseif ($company_type == 'eta') {

                        $subscription_response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                            ->acceptJson()
                            ->timeout(300) // Setting the timeout to 60 seconds
                            ->post(getenv('ADMIN_PORTAL_API') . '/stripe/subscription/create', [
                                'price_ids' => [$price_id],
                                'stripe_customer_id' => $stripe_customer_id,
                                'user_id' => $user_id,
                                'company_id' => $company_id,
                                // "trial_period_days" => 0,
                            ]);

                        if ($subscription_response->successful()) {


                            $subscription_data = $subscription_response->json();
                            $active_company_trail = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/stripe/subscription/' . $subscription_data['subscription']['id'], [
                                    'trial_end' => 'now'
                                ]);
                            if ($active_company_trail->successful()) {

                                $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                    ->acceptJson()
                                    ->timeout(300)
                                    ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                        'user_id' =>  $user_id,
                                        'ip_address' => $ip_address,
                                        'os_info' => $os_info,
                                        'location' => $location,
                                        'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                        'terms_details' => $this->terms_details(),
                                    ]);

                                if ($term_condition->successful()) {
                                    session(['enc_data' => $request->enc_data]);
                                    return response()->json([
                                       'status' => true,
                                            'stripe_customer_id' => $stripe_customer_id,
                                    ]);
                                } else {
                                    session()->forget('enc_data');
                                    return response()->json([
                                        'status' => false,
                                        'message' => $term_condition->body()
                                    ]);
                                }
                            } else {

                                $stripe_res = $active_company_trail->json();
                                $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                session()->forget('enc_data');
                                return response()->json([
                                    'status' => false,
                                    'message' => $message
                                ]);
                            }
                        } else {

                            $stripe_res = $subscription_response->json();
                            $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                            session()->forget('enc_data');
                            return response()->json([
                                'status' => false,
                                'message' => $message
                            ]);
                        }
                    } elseif ($company_type == 'ancr') { // admin new company create

                        $data = [
                            'price_ids' => [$price_id],
                            'stripe_customer_id' => $stripe_customer_id,
                            'user_id' => $user_id,
                            'company_id' =>  $company_id
                        ];

                        // Add the coupon only if it exists
                        if ($coupon) {
                            $data['discounts'] = [
                                [
                                    'coupon' => $coupon
                                ]
                            ];
                        }
                        $subscription_response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                            ->acceptJson()
                            ->timeout(300) // Setting the timeout to 60 seconds
                            ->post(getenv('ADMIN_PORTAL_API') . '/stripe/subscription/create', $data);

                        if ($subscription_response->successful()) {
                            // $responseData = $subscription_response->json();
                            $company_db_creation = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION')])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/childcompany/store', [
                                    'company_id' => $company_id,
                                    "title" => $company_title,
                                    'ip_address' => $ip_address,
                                    'ip_location' => $this->getLocation($ip_address),
                                ]);

                            if ($company_db_creation->successful()) {
                                $company_data = $company_db_creation->json();

                                $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                    ->acceptJson()
                                    ->timeout(300)
                                    ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                        'user_id' =>  $user_id,
                                        'ip_address' => $ip_address,
                                        'os_info' => $os_info,
                                        'location' => $location,
                                        'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                        'terms_details' => $this->terms_details(),
                                    ]);

                                if ($term_condition->successful()) {
                                    session(['enc_data' => $request->enc_data]);
                                    return response()->json([
                                      'status' => true,
                                            'stripe_customer_id' => $stripe_customer_id,
                                    ]);
                                } else {
                                    session()->forget('enc_data');
                                    return response()->json([
                                        'status' => false,
                                        'message' => $term_condition->body()
                                    ]);
                                }
                            } else {
                                $stripe_res = $company_db_creation->json();
                                $message = $stripe_res;
                                session()->forget('enc_data');
                                return response()->json([
                                    'status' => false,
                                    'message' => $message
                                ]);
                            }
                        } else {
                            $stripe_res = $subscription_response->json();
                            $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                            session()->forget('enc_data');
                            return response()->json([
                                'status' => false,
                                'message' => $message
                            ]);
                        }
                    }
                } else {
                    $stripe_res = $default_payment_method->json();
                    $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                    session()->forget('enc_data');
                    return response()->json([
                        'status' => false,
                        'message' => $message
                    ]);
                }
            }

            return response()->json([
                'status' => false,
                'message' => 'Something went wrong please try again'
            ]);
        } catch (\Exception $e) {

            $message = "SubscribeController:Line Number:" . $e->getLine() . '  ' . $e->getMessage();
            return response()->json([
                'status' => false,
                'message' => $message
            ]);
        }
    }

    public function planAddWithoutCard(Request $request)
    {
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        try {

            $data = (new CompanyRegistrationController())->decrypt($request->data);
            if (!$data['email']) {
                abort(404);
            }
            $stripe_customer_id = '';
            $user_id = trim($data['user_id']);
            $email = trim($data['email']);
            $owner_name = $data['firstName'] . ' ' . $data['lastName'];
             $firstName = $data['firstName'];
             $lastName = $data['lastName'];
            $company_type = trim($data['company_type']);
            $company_title = trim($data['company_title']);
            $subscription_id = trim($data['subscription_id']);
            $enc_company_price_id = trim($data['company_price_id']);
            $company_id = trim($data['company_id']);
            $enc_data = trim($data['price_id']);
            $newEncrypter = new \Illuminate\Encryption\Encrypter(getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN'), Config::get('app.cipher'));
            $dec_data = $newEncrypter->decryptString($enc_data);
            $dec_data = json_decode($dec_data, 1);
            $price_id = $dec_data['id'];
            $os_info = trim($data['os_info']);
            $location = trim($data['location']);
            $ip_address = $request->ip();
            $ip_address = $request->header('X-Forwarded-For');
            if (!$ip_address) {
                $ip_address = $request->ip();
            }
            Log::info("Ip Address X-Forwarded-for" . $request->header('X-Forwarded-For'));
            Log::info("Ip Address" . $request->ip());
            $company_price_id = '';
            if ($enc_company_price_id) {
                $compnewEncrypter = new \Illuminate\Encryption\Encrypter(getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN'), Config::get('app.cipher'));
                $com_dec_data = $compnewEncrypter->decryptString($enc_company_price_id);
                $com_dec_data = json_decode($com_dec_data, 1);
                $company_price_id = $com_dec_data['id'];
            }
            // stripe customer create
            if (isset($data['company_create_by_user']) && $company_type == 'ncr') {
                $allowUserToPerformAction = (new CompanyRegistrationController())->allowUserToPerformAction($email);
                if (!$allowUserToPerformAction) {
                    return response()->json([
                        'status' => false,
                    ]);
                }
            }

        $customerResponse = Http::withHeaders(
                    ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' =>  $user_id]
                )->acceptJson()
                    ->timeout(300) // Setting the timeout to 60 seconds
                    ->post(getenv('ADMIN_PORTAL_API') . '/customers', [
                        "email" => $email,
                        "name" => $firstName . ' ' . $lastName,

                    ]);


            if ($customerResponse->successful()) {

                $customer = $customerResponse->json();
                $stripe_customer_id = '';
                if (isset($customer['customer']['id'])) {
                    $stripe_customer_id = $customer['customer']['id'];
                }
            } else {
                session()->forget('enc_data');
                return response()->json([
                    'status' => false,
                    'message' => $customerResponse->body()
                ]);
            }


            // end

            $enc_data_id = session('enc_data');
            if ($enc_data_id != $request->data) {

                if ($company_type == 'ncr') {  //new_company_register

                    // here company create
                    $company_creation = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                        ->acceptJson()
                        ->timeout(300) // Setting the timeout to 60 seconds
                        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/add-company-web', [
                            'owner_email' => $email,
                            'owner_name' => $owner_name,
                            'company_title' => $company_title,
                            'plan_id' => 0,
                            'formation_type' => 'web', // web is fixed type for company creation from website
                            'message' => 'Click the button below to access your company. This system comes up with many amazing features. Start your journey today to stand out tomorrow!'
                        ]);


                    if ($company_creation->successful()) {
                        $company_data = $company_creation->json();
                        $subscription_response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                            ->acceptJson()
                            ->timeout(300) // Setting the timeout to 60 seconds
                            ->post(getenv('ADMIN_PORTAL_API') . '/stripe/subscription/create', [
                                'price_ids' => [$price_id],
                                'stripe_customer_id' => $stripe_customer_id,
                                'user_id' => $user_id,
                                'company_id' => $company_data['company']['id']
                            ]);

                        if ($subscription_response->successful()) {

                            // $responseData = $subscription_response->json();
                            $company_child_creation = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/childcompany/store', [
                                    'company_id' => $company_data['company']['id'],
                                    'company_title' => $company_title,
                                    'ip_address' => $ip_address,
                                    'ip_location' => $this->getLocation($ip_address),
                                ]);
                            if ($company_child_creation->successful()) {

                                $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                    ->acceptJson()
                                    ->timeout(300)
                                    ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                        'user_id' =>  $user_id,
                                        'ip_address' => $ip_address,
                                        'os_info' => $os_info,
                                        'location' => $location,
                                        'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                        'terms_details' => $this->terms_details(),
                                    ]);

                                if ($term_condition->successful()) {
                                    session(['enc_data' => $request->data]);
                                    return response()->json([
                                        'status' => true,
                                            'stripe_customer_id' => $stripe_customer_id,
                                    ]);
                                } else {
                                    session()->forget('enc_data');
                                    return response()->json([
                                        'status' => false,
                                        'message' => $term_condition->body()
                                    ]);
                                }
                            } else {
                                session()->forget('enc_data');
                                return response()->json([
                                    'status' => false,
                                    'message' => $company_child_creation->body()
                                ]);

                            }
                        } else {


                            $company_child_delete = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->delete(getenv('ADMIN_PORTAL_API') . '/staffviz/company/' . $company_data['company']['id'] . '/' . $user_id, []);
                            if ($company_child_delete->successful()) {
                                $stripe_res = $subscription_response->json();
                                $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                session()->forget('enc_data');
                                return response()->json([
                                    'status' => false,
                                    'message' => $message
                                ]);
                            } else {
                                session()->forget('enc_data');
                                return response()->json([
                                    'status' => false,
                                    'message' => $company_child_delete->body()
                                ]);
                            }
                            session()->forget('enc_data');
                            return response()->json([
                                'status' => false,
                                'message' => $subscription_response->body()
                            ]);
                        }
                    } else {
                                $stripe_res = $company_creation->json();
                                $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                session()->forget('enc_data');
                                return response()->json([
                                    'status' => false,
                                    'message' => $message
                                ]);

                    }
                } elseif ($company_type == 'tta') {  // trailing_to_active


                    if ($subscription_id) {

                        if ($price_id == $company_price_id) {  // active trail with some plan

                            $trailing_to_active = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/stripe/subscription/' . $subscription_id, [
                                    'trial_end' => 'now'
                                ]);

                            if ($trailing_to_active->successful()) {
                                $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300)
                                ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                    'user_id' =>  $user_id,
                                    'ip_address' => $ip_address,
                                    'os_info' => $os_info,
                                    'location' => $location,
                                    'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                    'terms_details' => $this->terms_details(),
                                ]);

                            if ($term_condition->successful()) {
                                session(['enc_data' => $request->data]);
                                return response()->json([
                                    'status' => true,
                                    'stripe_customer_id' => $stripe_customer_id,
                                ]);
                            } else {
                                session()->forget('enc_data');
                                return response()->json([
                                    'status' => false,
                                    'message' => $term_condition->body()
                                ]);
                            }
                            } else {
                                session()->forget('enc_data');
                                $stripe_res = $trailing_to_active->json();
                                $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                return response()->json([
                                    'status' => false,
                                    'message' => $message
                                ]);
                            }
                        } else {    // active trail with different plan

                            $trailing_to_active_with_new_plan = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300) // Setting the timeout to 60 seconds
                                ->put(getenv('ADMIN_PORTAL_API') . '/staffviz/stripe/update/subscription_items/' . $subscription_id, [
                                    "user_id" => $user_id,
                                    "trial_period_days" => 0,
                                    "price_ids" => [$price_id]
                                ]);
                            if ($trailing_to_active_with_new_plan->successful()) {

                                $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                                ->acceptJson()
                                ->timeout(300)
                                ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                    'user_id' =>  $user_id,
                                    'ip_address' => $ip_address,
                                    'os_info' => $os_info,
                                    'location' => $location,
                                    'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                    'terms_details' => $this->terms_details(),
                                ]);

                            if ($term_condition->successful()) {
                                session(['enc_data' => $request->data]);
                                return response()->json([
                                    'status' => true,
                                    'stripe_customer_id' => $stripe_customer_id,
                                ]);
                            } else {
                                session()->forget('enc_data');
                                return response()->json([
                                    'status' => false,
                                    'message' => $term_condition->body()
                                ]);
                            }
                            } else {
                                session()->forget('enc_data');
                                $stripe_res = $trailing_to_active_with_new_plan->json();
                                $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                                return response()->json([
                                    'status' => false,
                                    'message' => $message
                                ]);

                            }
                        }
                    }
                } elseif ($company_type == 'eta') {

                    $subscription_response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                        ->acceptJson()
                        ->timeout(300) // Setting the timeout to 60 seconds
                        ->post(getenv('ADMIN_PORTAL_API') . '/stripe/subscription/create', [
                            'price_ids' => [$price_id],
                            'stripe_customer_id' => $stripe_customer_id,
                            'user_id' => $user_id,
                            'company_id' => $company_id,
                            // "trial_period_days" => 0,
                        ]);

                    if ($subscription_response->successful()) {


                        $subscription_data = $subscription_response->json();
                        $active_company_trail = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                            ->acceptJson()
                            ->timeout(300) // Setting the timeout to 60 seconds
                            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/stripe/subscription/' . $subscription_data['subscription']['id'], [
                                'trial_end' => 'now'
                            ]);
                        if ($active_company_trail->successful()) {

                            $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                            ->acceptJson()
                            ->timeout(300)
                            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                'user_id' =>  $user_id,
                                'ip_address' => $ip_address,
                                'os_info' => $os_info,
                                'location' => $location,
                                'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                'terms_details' => $this->terms_details(),
                            ]);

                        if ($term_condition->successful()) {
                            session(['enc_data' => $request->data]);
                            return response()->json([
                                'status' => true,
                                'stripe_customer_id' => $stripe_customer_id,
                            ]);
                        } else {
                            session()->forget('enc_data');
                            return response()->json([
                                'status' => false,
                                'message' => $term_condition->body()
                            ]);
                        }
                        } else {
                            session()->forget('enc_data');
                            $stripe_res = $active_company_trail->json();
                            $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                            return response()->json([
                                'status' => false,
                                'message' => $message
                            ]);
                        }
                    } else {
                        session()->forget('enc_data');
                        $stripe_res = $subscription_response->json();
                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                        return response()->json([
                            'status' => false,
                            'message' => $message
                        ]);
                    }
                } elseif ($company_type == 'ancr') { // admin new company create

                    $subscription_response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                        ->acceptJson()
                        ->timeout(300) // Setting the timeout to 60 seconds
                        ->post(getenv('ADMIN_PORTAL_API') . '/stripe/subscription/create', [
                            'price_ids' => [$price_id],
                            'stripe_customer_id' => $stripe_customer_id,
                            'user_id' => $user_id,
                            'company_id' =>  $company_id
                        ]);

                    if ($subscription_response->successful()) {
                        // $responseData = $subscription_response->json();
                        $company_db_creation = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION')])
                            ->acceptJson()
                            ->timeout(300) // Setting the timeout to 60 seconds
                            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/childcompany/store', [
                                'company_id' => $company_id,
                                "title" => $company_title,
                                'ip_address' => $ip_address,
                                'ip_location' => $this->getLocation($ip_address),
                            ]);

                        if ($company_db_creation->successful()) {
                            $company_data = $company_db_creation->json();

                            $term_condition = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => $user_id])
                            ->acceptJson()
                            ->timeout(300)
                            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/user_subscription_info', [
                                'user_id' =>  $user_id,
                                'ip_address' => $ip_address,
                                'os_info' => $os_info,
                                'location' => $location,
                                'terms_acceptance_time' => date('Y-m-d H:i:s'),
                                'terms_details' => $this->terms_details(),
                            ]);

                        if ($term_condition->successful()) {
                            session(['enc_data' => $request->data]);
                            return response()->json([
                                'status' => true,
                                'stripe_customer_id' => $stripe_customer_id,
                            ]);
                        } else {
                            session()->forget('enc_data');
                            return response()->json([
                                'status' => false,
                                'message' => $term_condition->body()
                            ]);
                        }
                        } else {

                            $stripe_res = $company_db_creation->json();
                            $message = $stripe_res;
                            session()->forget('enc_data');
                            return response()->json([
                                'status' => false,
                                'message' => $message
                            ]);

                        }
                    } else {
                        session()->forget('enc_data');
                        $stripe_res = $subscription_response->json();
                        $message = isset($stripe_res['message']) ? $stripe_res['message'] : 'Something went wrong';
                        return response()->json([
                            'status' => false,
                            'message' => $message
                        ]);

                    }
                }
            }
            session()->forget('enc_data');
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong please try again 1'
            ]);
        } catch (\Exception $e) {
            Log::error("SubscribeController:Line Number:" . $e->getLine());
            Log::error($e->getMessage());
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function subscription()
    {
        $data = [
            'meta_title' => 'StaffViz - Company Registration',
            'meta_descp' => '',
        ];

        return view('theme.web.success', [
            'data' => $data,
        ]);
    }

    public function applyCoupon(Request $request)
    {

        $data = (new CompanyRegistrationController())->decrypt($request->data);
        if (!$data['user_id']) {
            abort(404);
        }

        $user_id = trim($data['user_id']);
        $response = Http::withHeaders(
            ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' =>  $user_id]
        )->acceptJson()
            ->timeout(300) // Setting the timeout to 60 seconds
            ->get(getenv('ADMIN_PORTAL_API') . '/apply/coupon/' . $request->coupon);
        // ->get('http://192.168.6.22:9094/api/apply/coupon/'.$request->coupon);

        if ($response->successful()) {

            $response = $response->json();


            $plans = Cache::store('file')->get('plans');
            $price_id = $data['price_id'];
            if (empty($plans)) {
                $this->getPlans();
                $plans = Cache::store('file')->get('plans');
            }

            if (!empty($plans)) {

                $result = $this->findPriceId($plans, $price_id);

                if ($result !== null) {

                    if ($result['product']['type_of_price'] === 'monthly') {
                        $unit_amount = $result['price']['unit_amount'];
                        $msg = '1 month';
                    } elseif ($result['product']['type_of_price'] === 'quarterly') {
                        $unit_amount = $result['price']['unit_amount'] * 3;
                        $msg = '3 months';
                    } elseif ($result['product']['type_of_price'] === 'bi-annually') {
                        $unit_amount = $result['price']['unit_amount'] * 6;
                        $msg = '6 months';
                    } elseif ($result['product']['type_of_price'] === 'yearly') {
                        $unit_amount =  $result['price']['unit_amount'] * 12;
                        $msg = '12 months';
                    }

                    if (isset($response['coupon']['amount_off']) && $response['coupon']['amount_off'] != null) {
                        // Fixed amount discount
                        $amount_off = $response['coupon']['amount_off'] / 100;
                        $discounted_price = ($result['price']['minimum_users'] * $unit_amount) - $amount_off;
                        $discount_amount = '$' . number_format($amount_off, 2);

                        // Set tooltip message for fixed discount
                        $tooltip_message = "This coupon provides a fixed discount of {$discount_amount} on your first payment.";
                    } elseif (isset($response['coupon']['percent_off']) && $response['coupon']['percent_off'] != null) {
                        // Percentage discount
                        $percent_off = $response['coupon']['percent_off'];
                        $original_price = $result['price']['minimum_users'] * $unit_amount;

                        // Calculate discount percentage amount and apply to get discounted price
                        $discount_amount = '$' . number_format($original_price * ($percent_off / 100), 2);
                        $discounted_price = $original_price - ($original_price * ($percent_off / 100));

                        // Build tooltip message based on duration
                        if ($response['coupon']['duration'] === 'repeating' && $response['coupon']['duration_in_months'] > 1) {
                            $tooltip_message = "This coupon provides {$percent_off}% discount for the first month, and then " . ($percent_off) . "% for the next " . ($response['coupon']['duration_in_months'] - 1) . " months.";
                        } elseif ($response['coupon']['duration'] === 'once') {
                            $tooltip_message = "This coupon provides a one-time discount of {$percent_off}% on your first payment.";
                        } else {
                            $tooltip_message = "This coupon provides a {$percent_off}% discount every month.";
                        }
                    } else {
                        // No discount
                        $discounted_price = $result['price']['minimum_users'] * $unit_amount;
                        $discount_amount = '$0';
                        $tooltip_message = 'No discount applied.';
                    }



                    // Construct the HTML
                    $html = '
                    <div class="summary-box">
                        <div class="row">
                            <div class="d-flex w-100">
                                <div class="float-left w-75">
                                    <div class="plan_name">' . htmlspecialchars($result['product']['name'] ?? 'Basic Plan') . '</div>
                                    <div class="plan_users">' . htmlspecialchars($result['price']['minimum_users']) . ' Users Price ($' . number_format($result['price']['unit_amount'], 2) . ' x ' . htmlspecialchars($result['price']['minimum_users']) . ' users x ' . htmlspecialchars($msg) . ')</div>
                                </div>
                                <div class="float-right w-25 price_style">
                                    <div class="plan_price_per_user">$' . number_format($result['price']['minimum_users'] * $unit_amount, 2) . '</div>
                                </div>
                            </div>
                        </div>
                        <div class="row price-row">
                            <div class="d-flex w-100">
                                <div class="float-left w-50" style="color: #050505">
                                    <div>Subtotal:</div>
                                </div>
                                <div class="float-right w-50 subtotal-price">
                                    <div class="plan_total_price">$' . number_format($result['price']['minimum_users'] * $unit_amount, 2) . '</div>
                                </div>
                            </div>
                            <div class="d-flex w-100">
                                <div class="left-text">
                                    <div style="color: #050505 !important;font-size:16px">Coupon:
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="
                                    http://www.w3.org/2000/svg">
                                    <mask id="mask0_3820_1425" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                    <rect width="20" height="20" fill="#D9D9D9"/>
                                    </mask>
                                    <g mask="url(#mask0_3820_1425)">
                                    <path d="M9.29143 17.5832C9.11699 17.5832 8.94907 17.5525 8.78768 17.4911C8.62615 17.4296 8.47664 17.3305 8.33914 17.1938L2.81352 11.6473C2.67532 11.51 2.57449 11.3583 2.51102 11.1923C2.44768 11.0264 2.41602 10.8575 2.41602 10.6859C2.41602 10.5095 2.44754 10.344 2.5106 10.1894C2.57365 10.035 2.67463 9.889 2.81352 9.7515L9.77268 2.79963C9.90727 2.66574 10.0553 2.56845 10.2166 2.50775C10.3782 2.44692 10.545 2.4165 10.7173 2.4165H16.2429C16.618 2.4165 16.9364 2.54845 17.1981 2.81234C17.4598 3.07636 17.5906 3.39366 17.5906 3.76421V9.28984C17.5906 9.46845 17.5599 9.63866 17.4985 9.80046C17.4371 9.96227 17.3375 10.1094 17.1996 10.2419L10.2398 17.1938C10.103 17.3305 9.95428 17.4296 9.79372 17.4911C9.63331 17.5525 9.46588 17.5832 9.29143 17.5832ZM9.10518 16.4196C9.15852 16.4731 9.22129 16.4998 9.29352 16.4998C9.3656 16.4998 9.42831 16.4731 9.48164 16.4196L16.4352 9.48213C16.462 9.45546 16.4807 9.42609 16.4914 9.394C16.502 9.36206 16.5073 9.33005 16.5073 9.29796V3.76421C16.5073 3.68949 16.4819 3.6281 16.4312 3.58005C16.3805 3.53185 16.3178 3.50775 16.2429 3.50775H10.6052L3.57956 10.5175C3.52609 10.5709 3.49935 10.6336 3.49935 10.7057C3.49935 10.7779 3.52609 10.8407 3.57956 10.894L9.10518 16.4196ZM14.4833 6.56546C14.7748 6.56546 15.0227 6.46421 15.2268 6.26171C15.4309 6.05921 15.5329 5.81324 15.5329 5.5238C15.5329 5.23227 15.4312 4.98449 15.2279 4.78046C15.0244 4.5763 14.7773 4.47421 14.4866 4.47421C14.1959 4.47421 13.9491 4.57595 13.7462 4.77942C13.5432 4.98289 13.4416 5.22998 13.4416 5.52067C13.4416 5.81123 13.5429 6.05803 13.7454 6.26109C13.948 6.464 14.194 6.56546 14.4833 6.56546Z" fill="#333333"/>
                                    </g>
                                    </svg>
                                    </div>
                                    <p class="coupon-discount coupon_name">' . htmlspecialchars($response['coupon']['name'] ?? 'No Coupon') . '</p>
                                    <div class="tooltip-container">
                                        <i style="margin-left: 4px; cursor: pointer;">
                                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="
                                        http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3837_512)">
                                        <path d="M7.74023 9.6167V6.1167H5.99023V6.9917H6.86523V9.6167H5.55273V10.4917H9.05273V9.6167H7.74023ZM7.30273 3.4917C7.17294 3.4917 7.04606 3.53019 6.93814 3.6023C6.83022 3.67441 6.74611 3.7769 6.69644 3.89681C6.64677 4.01673 6.63377 4.14868 6.65909 4.27598C6.68442 4.40328 6.74692 4.52021 6.8387 4.61199C6.93047 4.70377 7.04741 4.76627 7.17471 4.79159C7.30201 4.81691 7.43396 4.80392 7.55387 4.75425C7.67378 4.70458 7.77628 4.62046 7.84839 4.51254C7.9205 4.40462 7.95898 4.27774 7.95898 4.14795C7.95898 3.9739 7.88984 3.80698 7.76677 3.68391C7.6437 3.56084 7.47678 3.4917 7.30273 3.4917Z" fill="#333333"/>
                                        <path d="M7.30274 13.1167C6.09133 13.1167 4.90712 12.7575 3.89987 12.0845C2.89262 11.4114 2.10756 10.4548 1.64397 9.33564C1.18039 8.21644 1.05909 6.98491 1.29543 5.79677C1.53176 4.60864 2.11511 3.51727 2.97171 2.66067C3.8283 1.80408 4.91968 1.22073 6.10781 0.984392C7.29594 0.748058 8.52748 0.869353 9.64667 1.33294C10.7659 1.79653 11.7225 2.58158 12.3955 3.58883C13.0685 4.59608 13.4277 5.78029 13.4277 6.9917C13.4277 8.61615 12.7824 10.1741 11.6338 11.3227C10.4851 12.4714 8.92719 13.1167 7.30274 13.1167ZM7.30274 1.7417C6.26439 1.7417 5.24935 2.04961 4.38599 2.62649C3.52264 3.20336 2.84973 4.0233 2.45237 4.98261C2.05501 5.94193 1.95104 6.99753 2.15361 8.01593C2.35619 9.03433 2.8562 9.96979 3.59043 10.704C4.32465 11.4382 5.26011 11.9383 6.27851 12.1408C7.29691 12.3434 8.35251 12.2394 9.31182 11.8421C10.2711 11.4447 11.0911 10.7718 11.668 9.90845C12.2448 9.04509 12.5527 8.03005 12.5527 6.9917C12.5527 5.59932 11.9996 4.26396 11.015 3.27939C10.0305 2.29483 8.69512 1.7417 7.30274 1.7417Z" fill="#333333"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_3837_512">
                                        <rect width="14" height="14" fill="white" transform="translate(0.302734 -0.0078125)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                        </i>
                                        <div class="tooltip tooltip-message">
                                            ' . htmlspecialchars($tooltip_message) . '
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right discount-price plan_applied_discount">-' . $discount_amount . '</div>
                            </div>
                        </div>
                        <div class="row price-row">
                            <div class="d-flex w-100">
                                <div class="float-left w-50">
                                    <h5>Subtotal:</h5>
                                </div>
                                <div class="float-right w-50 final-price">
                                    <h5 class="final_amount">$' . number_format($discounted_price, 2) . '</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>* In case of trial these prices will apply after the end of Trial</div>
                    ';
                    return response()->json(['status' => true, 'html' => $html]);
                }
            }
        }
        return response()->json([
            'status' => false,
        ]);
    }
    private function getUserRealIp() {
        /**
         * Our Application is deployed behind the docker or proxy. We are not getting real ip addresses.
         */
        try {
            $response = Http::get('https://api64.ipify.org?format=json');
            $ip = $response->json();
            if(isset($ip['ip'])) {
                return $ip['ip'];
            } else {
                return '';
            }
        } catch (\Exception $ex) {
            return '';
        }
    }

}
