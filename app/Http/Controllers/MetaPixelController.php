<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MetaPixelController extends Controller
{
    public function pricing_page(Request $request)
    {
        $accessToken = getenv('PIXEL_TOKEN');
        $pixelId  = getenv('PIXEL_ID');

        $fbp = isset($_COOKIE['_fbp']) ? $_COOKIE['_fbp'] : null;
        $userIp = $request->ip();

        try {
            $userData = [
                "client_ip_address" => $userIp,
                "client_user_agent" => $request->header('User-Agent'),
                "fbp" => $fbp,
                "external_id" => uniqid(),
            ];

            $eventData = [
                "event_name" => "Pricing",
                "event_time" => now()->timestamp,
                "action_source" => "website",
                "user_data" => $userData,
            ];

            $eventPayload = [
                'data' => [$eventData],
                'test_event_code' => getenv('PIXEL_TEST_CODE'),
            ];

            $url = "https://graph.facebook.com/v21.0/{$pixelId}/events?access_token={$accessToken}";

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($url, $eventPayload);

            $responseBody = $response->json();

            if ($response->successful()) {
                return response()->json(['success' => true, 'response' => $responseBody]);
            } else {
                return response()->json(['success' => false, 'response' => $responseBody,'url'=>$url,'eventPayload'=>$eventPayload]);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function book_a_demo(Request $request)
    {
        $accessToken = getenv('PIXEL_TOKEN');
        $pixelId  = getenv('PIXEL_ID');

        $fbp = isset($_COOKIE['_fbp']) ? $_COOKIE['_fbp'] : null;
        $userIp = $_SERVER['REMOTE_ADDR'];

        try {

            $userData = array_filter([
                "client_ip_address" => $userIp,
                "client_user_agent" => $request->header('User-Agent'),
                "fbp" => $fbp,
                "external_id" => uniqid(),
            ]);

            $eventData = [
                "event_name" => "Book a Demo",
                "event_time" => now()->timestamp,
                "action_source" => "website",
                "user_data" => $userData,
            ];

            $eventPayload = [
                'data' => [$eventData],
                'test_event_code' => getenv('PIXEL_TEST_CODE'),
            ];

            $url = "https://graph.facebook.com/v21.0/{$pixelId}/events?access_token={$accessToken}";

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($url, $eventPayload);

            if ($response->successful()) {
                return response()->json(['success' => true, 'response' => $response->json()]);
            } else {
                return response()->json(['success' => false, 'response' => $responseBody,'url'=>$url,'eventPayload'=>$eventPayload]);
            }

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function app_download(Request $request)
    {
        $accessToken = getenv('PIXEL_TOKEN');;
        $pixelId  = getenv('PIXEL_ID');

        $fbp = isset($_COOKIE['_fbp']) ? $_COOKIE['_fbp'] : null;
        $userIp = $_SERVER['REMOTE_ADDR'];
        $custom_data = [
            'app_name' => $request->input('app_name'),
            'app_version' => $request->input('app_version')
        ];

        try {

            $userData = array_filter([
                "client_ip_address" => $userIp,
                "client_user_agent" => $request->header('User-Agent'),
                "fbp" => $fbp,
                "external_id" => uniqid(),
            ]);

            $eventData = [
                "event_name" => "App Download",
                "event_time" => now()->timestamp,
                "action_source" => "website",
                "user_data" => $userData,
                "custom_data" => $custom_data
            ];

            $eventPayload = [
                'data' => [$eventData],
                'test_event_code' => getenv('PIXEL_TEST_CODE'),
            ];

            $url = "https://graph.facebook.com/v21.0/{$pixelId}/events?access_token={$accessToken}";

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($url, $eventPayload);

            if ($response->successful()) {
                return response()->json(['success' => true, 'response' => $response->json()]);
            } else {
                return response()->json(['success' => false, 'response' => $responseBody,'url'=>$url,'eventPayload'=>$eventPayload]);
            }

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function contact_pixel(Request $request)
    {
        $accessToken = getenv('PIXEL_TOKEN');;
        $pixelId  = getenv('PIXEL_ID');

        $fbp = isset($_COOKIE['_fbp']) ? $_COOKIE['_fbp'] : null;
        $userIp = $_SERVER['REMOTE_ADDR'];

        $custom_data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_no' => $request->input('number'),
            'website' => $request->input('website'),
            'message' => $request->input('message')
        ];

        try {

            $userData = array_filter([
                "client_ip_address" => $userIp,
                "client_user_agent" => $request->header('User-Agent'),
                "fbp" => $fbp,
                "external_id" => uniqid(),
                "fn" => hash('sha256', $request->input('name')),
                "em" => hash('sha256', $request->input('email')),
                "ph" => hash('sha256', $request->input('number')),
            ]);

            $eventData = [
                "event_name" => "Contact Us",
                "event_time" => now()->timestamp,
                "action_source" => "website",
                "user_data" => $userData,
                "custom_data" => $custom_data
            ];

            $eventPayload = [
                'data' => [$eventData],
                'test_event_code' => getenv('PIXEL_TEST_CODE'),
            ];

            $url = "https://graph.facebook.com/v21.0/{$pixelId}/events?access_token={$accessToken}";

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($url, $eventPayload);

            if ($response->successful()) {
                return response()->json(['success' => true, 'response' => $response->json()]);
            } else {
                return response()->json(['success' => false, 'response' => $responseBody,'url'=>$url,'eventPayload'=>$eventPayload]);
            }

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function metaPixel(Request $request){

        try {

            $accessToken = getenv('PIXEL_TOKEN');
            $pixelId  = getenv('PIXEL_ID');
            $fbp = isset($_COOKIE['_fbp']) ? $_COOKIE['_fbp'] : null;
            $userIp = $request->ip();

            $userData = [
                "client_ip_address" => $userIp,
                "client_user_agent" => $request->header('User-Agent'),
                "fbp" => $fbp,
                "external_id" => uniqid(),
            ];

            switch($request->event){
                case 'trial_signup':

                    $custom_data = [
                        'plan_name' => $request->input('plan_name'),
                        'payment_type' => $request->input('payment_type'),
                        'plan_price' => $request->input('plan_price'),
                    ];
                        $eventData = [
                            "event_name" => "trial_signup",
                            "event_time" => now()->timestamp,
                            "action_source" => "website",
                            "user_data" => $userData,
                            "custom_data" => $custom_data
                        ];
                    break;
                case 'free_plan':

                    $custom_data = [
                        'plan_name' => $request->input('plan_name'),
                        'payment_type' => $request->input('payment_type'),
                        'plan_price' => $request->input('plan_price'),
                    ];
                        $eventData = [
                            "event_name" => "free_plan",
                            "event_time" => now()->timestamp,
                            "action_source" => "website",
                            "user_data" => $userData,
                            "custom_data" => $custom_data
                        ];
                    break;
                case 'client_info':

                    $custom_data = [
                        'firstName' => $request->input('firstName'),
                        'lastName' => $request->input('lastName'),
                        'companyName' => $request->input('companyName'),
                    ];
                        $eventData = [
                            "event_name" => "client_info",
                            "event_time" => now()->timestamp,
                            "action_source" => "website",
                            "user_data" => $userData,
                            "custom_data" => $custom_data
                        ];
                    break;
                case 'begin_checkout':

                    $custom_data = [
                        'user_email' => $request->input('user_email'),
                        'first_name' => $request->input('first_name'),
                        'last_name' => $request->input('last_name'),
                        'plan_name' => $request->input('plan_name'),
                        'payment_type' => $request->input('payment_type'),
                        'plan_price' => $request->input('plan_price'),
                    ];
                        $eventData = [
                            "event_name" => "begin_checkout",
                            "event_time" => now()->timestamp,
                            "action_source" => "website",
                            "user_data" => $userData,
                            "custom_data" => $custom_data
                        ];
                    break;
                    case 'Lead':


                        $custom_data = [
                            'user_email' => $request->input('user_email'),
                            'first_name' => $request->input('first_name'),
                            'last_name' => $request->input('last_name'),
                            'company_name' => $request->input('company_name'),
                            'plan_name' => $request->input('plan_name'),
                            'payment_type' => $request->input('payment_type'),
                            'plan_price' => $request->input('plan_price'),
                        ];
                            $eventData = [
                                "event_name" => "Lead",
                                "event_time" => now()->timestamp,
                                "action_source" => "website",
                                "user_data" => $userData,
                                "custom_data" => $custom_data
                            ];



                        // add an other integration method

                            $webhookUrls = [
                                'Free Plan' => 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/cef85f7f-7122-4df3-9559-62e8371533b1',
                                'Basic'     => 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/baa0e744-8f99-4dbe-a14b-91e73529340b',
                                'Standard'  => 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/745d0c1f-8260-4dad-8565-10ba2a2b210f',
                                'Premium'   => 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/51813776-0e7f-46e1-b67f-942faedd99aa',
                            ];

                            $planName = $request->input('plan_name');
                            $url_connector = $webhookUrls[$planName] ?? null; // Default to null if the plan is not found
                            if($url_connector) {
                                Http::withHeaders([
                                    'Content-Type' => 'application/json',
                                ])->post($url_connector, $custom_data);
                            }



                        break;
            }



            $eventPayload = [
                'data' => [$eventData],
                'test_event_code' => getenv('PIXEL_TEST_CODE'),
            ];

            $url = "https://graph.facebook.com/v21.0/{$pixelId}/events?access_token={$accessToken}";

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($url, $eventPayload);

            $responseBody = $response->json();

            if ($response->successful()) {
                return response()->json(['success' => true, 'response' => $responseBody]);
            } else {
                return response()->json(['success' => false, 'response' => $responseBody]);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }

    }

}
