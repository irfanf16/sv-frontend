<?php 

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

	public function index(Request $request)
	{
		$data = [];
		return view('admincp.auth.index', ['data' => $data]);
	}

}