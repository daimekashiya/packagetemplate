<?php

namespace daimekashiya\packagetemplate\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Permission;
use App\PermissionRole;
use App\MenuItem;




class CoreController extends Controller{

	public function index(){

		return view('packagetemplate::index');
	}


}