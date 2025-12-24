<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return Teacher::with('user')->get();
    }

    public function getCourses(Teacher $teacher)
    {
        return $teacher->load('courses');
    }
    public function storeCourses(Teacher $teacher, Request $request)
    {
        $teacher->courses()->createMany($request->names);
    }
}
