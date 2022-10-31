<?php

namespace App\Http\Controllers\Web;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

         $cats = Cat::select('id','name')->where('active','1')->get();

        return view('web.index',compact('cats'));
    }
}
