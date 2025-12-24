<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/users',[UserController::class,'store']);
Route::post('/books/{user}',[BookController::class,'store']);
Route::get('/books/{user}',[BookController::class,'index']);

Route::get('teachers',[TeacherController::class,'index']);
Route::get('teacher/{teacher}/courses',[TeacherController::class,'getCourses']);
Route::get('students',[StudentController::class,'index']);
Route::get('courses/{course}/student',[StudentController::class,'syncStudentsInCourse']);
