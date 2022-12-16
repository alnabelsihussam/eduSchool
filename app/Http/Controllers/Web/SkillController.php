<?php
namespace App\Http\Controllers\web;
use App\Models\Cat;
use App\Models\Skill;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function show($id){

        $data['skill'] = Skill::findOrFail($id);
        $data['cats'] = Cat::select('id','name')->get();


        return view('web.skills.show',)->with($data);
    }
}
