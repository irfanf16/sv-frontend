<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveGuestClientFormRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Log;


class ChatbotController extends Controller
{
    public function __construct()
    {
    }
    public function save_guest_client(SaveGuestClientFormRequest $request)
    {
        $post = $request->only(['client_email', 'client_name', 'client_phone']);
        $post['client_phone'] = $request->get('client-phone');
        $response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION')])
            ->acceptJson()
            ->timeout(300) // Setting the timeout to 60 seconds
            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/save_guest_client', $post);
        if ($response->successful()) {
            $json = $response->json();
            $json['id'] = Crypt::encryptString($json['id']);
            return response()->json([
                'success' => true,
                'message' => 'Successfully saved.',
                'total_path_api' => getenv('ADMIN_PORTAL_API') . '/staffviz/save_guest_client',
                'data' => $json
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Error',
                'data' => $response->json(),
                'total_path_api' => getenv('ADMIN_PORTAL_API') . '/staffviz/save_guest_client', 
            ], $response->status());
        }
    }

    public function save_guest_client_rating(Request $request)
    {
        // dd(getenv('ADMIN_PORTAL_API') . '/staffviz/save_guest_client_rating');
        try {
            $id = Crypt::decryptString($request->rating_client_id);
        } catch (DecryptException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'data' => []
            ], 500);
        }
        $post = [
            'id' => $id,
            'client_comments' => $request->get('client-comments'),
            'rating_stars' => $request->get('rating-stars'),
        ];
        $response = Http::withHeaders(['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION')])
            ->acceptJson()
            ->timeout(300) // Setting the timeout to 60 seconds
            ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/save_guest_client_rating', $post);


        if ($response->successful()) {
            return response()->json([
                'success' => true,
                'message' => 'Successfully saved.',
                'total_path_api' => getenv('ADMIN_PORTAL_API') . '/staffviz/save_guest_client_rating',
                'data' => $response->json()
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Error',
                'data' => $response->json(),
                'total_path_api' => getenv('ADMIN_PORTAL_API') . '/staffviz/save_guest_client_rating',
            ], $response->status());
        }
    }
}
