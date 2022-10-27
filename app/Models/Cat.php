<?php

namespace App\Models;

use App\Models\Cat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cat extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name','active'];
}
