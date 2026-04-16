<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorDashboardController extends Controller
{
    public function index()
    {
        return view('tutor.dashboard');
    }

    public function courses()
    {
        $courses = Course::where('user_id', auth()->id())->latest()->get();

        return view('tutor.courses.index', compact('courses'));
    }

    public function manageCourse(Course $course)
    {
        $course->load('modules.materials');

        return view('tutor.courses.manage', compact('course'));
    }
}
