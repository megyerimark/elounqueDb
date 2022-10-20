<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\StudentModel;

class SchoolController extends Controller
{
    public function listStudent(){

        $student = Student::with("course")->get();

    }
}
