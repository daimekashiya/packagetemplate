<?php 

namespace daimekashiya\packagetemplate\controllers;

use App\Http\Controllers\Controller;

use DateTime;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SampleController extends Controller{

    // public function __construct()
    // {
    // 	$this->middleware('auth');
    // }


    public function index(Request $request)
    {
    	return view('packagetemplate::index');
    }
}