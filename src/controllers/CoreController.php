<?php

namespace daimekashiya\packagetemplate\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use daimekashiya\packagetemplate\models\PackageTemplate;

class CoreController extends Controller
{

    public function index(){
        $sample = config('packagetemplate.sample');
        return view('packagetemplate::index',compact('sample') );
    }
}