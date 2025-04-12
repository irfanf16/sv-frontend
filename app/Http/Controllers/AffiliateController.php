<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Requests\AffiliateRegistrationFormRequest;

class AffiliateController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'meta_title' => 'StaffViz - Partner',
            'meta_descp' => 'Affiliate',
        ];
        return view('theme.affiliate.index', ['data' => $data]);
    }
    public function save(AffiliateRegistrationFormRequest $request) {
        $post = $request->except('_token');
        $post["status"] = "ACCOUNT_STATUS_ENABLED";
        $response = Http::withHeaders(
            ['token' => getenv('INTERNAL_SYSTEM_COMMUNICATION'), 'user-id' => 0]
        )->acceptJson()
        ->timeout(300)
        ->post(getenv('ADMIN_PORTAL_API') . '/staffviz/affiliate/save', $post);
        return $response->json();
    }
}
