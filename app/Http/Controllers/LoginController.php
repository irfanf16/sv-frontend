<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function login()
    {
        $data = [
                    'meta_title' => 'StaffViz - Login',
                    'meta_descp' => '',
                ];
        return view('theme.login', [ 'data' => $data] );
    }
}
