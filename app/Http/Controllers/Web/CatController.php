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

   // $cat = Cat::findOrFail($id);
   // $cats = Cat::get();
    //return view('web.cat.show',compact('cat','cats'));


    $data['cat'] = Cat::findOrFail($id);
    $data['cats'] = Cat::select('id','name')->get();
    $data['skills'] = $data['cat']->skills()->paginate(6);
    return view('web.cat.show')->with($data);

    }
}
