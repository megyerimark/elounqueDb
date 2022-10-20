<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class SchoolController extends Controller
{
//     public function listStudent(){

//         $students = Student::with('course')->get();
    
       
//         // foreach($students as $student){

        
//         // echo "<pre>";
  
//         //  print_r($student->name. " ");
//         //  print_r($student->course->course);
//         // }


//         return view ("student",[
//             "students" => $students
//         ]);



//     }

   public function listStudent(){

        $students = Course::find( 1 ) ->student;

        return view ("student",[
                        "students" => $students
                     ]);

    }

}
