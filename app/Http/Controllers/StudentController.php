<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return Student::with('user')->get();
    }
    public function syncStudentsInCourse(Request $request,Student $student){
       return  $student->courses()->sync($request->course_id);

    }
}
