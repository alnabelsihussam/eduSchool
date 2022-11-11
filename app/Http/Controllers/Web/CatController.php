<?php

namespace App\Http\Controllers\Web;

use App\Models\Cat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function index(){

    $cats = Cat::select('id','name')->get();

    return view('web.index',compact('cats'));

    }

    public function show($id){

    $cat = Cat::findOrFail($id);

    return view('web.cat.show',compact('cat'));

    }
}
