<?php

namespace App\Http\Controllers\web;
use App\Models\Cat;
use App\Models\Skill;
use App\Models\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function show($id){

        $exam=Exam::findOrFail($id);

        return view('web.exams.show',compact('exam'));
    }

    public function questions($id){

        $data['exam'] = Exam::findOrFail($id);


        return view('web.exams.questions',)->with($data);
    }
}
