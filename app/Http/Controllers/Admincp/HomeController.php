<?php 

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

	public function index(Request $request)
	{
		$data = [];
		return view('admincp.dashboard.index', ['data' => $data]);
	}

}