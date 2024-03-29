<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;


    public function Cat(){
        return $this->belongsTo(Cat::class);
    }

    public function exams(){
        return $this->hasMany(Exam::class);
    }

     public function videos(){
        return $this->hasMany(Video::class);
    }

     public function getStduentsCount(){

        $studentNum = 0;

        foreach ($this->exams as $exam) {
             $studentNum =  $studentNum + $exam->users()->count();
        }

        return $studentNum;
    }


}
