<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SchoolController extends Controller
{
    public function listStudent(){

        $student = Student::with('course')->get();
        echo "<pre>";
        print_r($student);
       

    }
}
