<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SchoolController extends Controller
{
    public function listStudent(){

        $students = Student::with('course')->get();
    
       
        // foreach($students as $student){

        
        // echo "<pre>";
  
        //  print_r($student->name. " ");
        //  print_r($student->course->course);
        // }


        return view ("student",[
            "students" => $students
        ]);



    }
}
