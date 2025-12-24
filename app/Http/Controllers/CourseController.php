<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getStudentInCourse(Course $course){
        return $course->load('student');
    }
}
