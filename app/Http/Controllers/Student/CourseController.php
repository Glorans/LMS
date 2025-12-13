<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('instructor')->latest()->get();
        return view('student.courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        $course->load('instructor');
        return view('student.courses.show', compact('course'));
    }
}