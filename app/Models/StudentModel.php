<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseModel;

class StudentModel extends Model
{
    use HasFactory;

    public function course(){
        return $tihs->hasMany(Course::class);
    }
}
